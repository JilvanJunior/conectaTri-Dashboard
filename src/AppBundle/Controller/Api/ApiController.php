<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\ApiSession;
use AppBundle\Entity\FCMToken;
use AppBundle\Entity\Listing;
use AppBundle\Entity\ListingProduct;
use AppBundle\Entity\MartinsOrder;
use AppBundle\Entity\OrderProduct;
use AppBundle\Entity\Product;
use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteProduct;
use AppBundle\Entity\QuoteSupplier;
use AppBundle\Entity\QuoteSupplierStatus;
use AppBundle\Entity\Representative;
use AppBundle\Entity\Retailer;
use AppBundle\Entity\Supplier;
use AppBundle\Model\ApiError;
use AppBundle\Model\ApiSupplier;
use AppBundle\Utils\Utils;
use AppBundle\Service\MartinsConnector;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Router;

class ApiController extends FOSRestController {

    const emailRegex = '/(\w{1,2}).*?(\w{1,2})@(?:(\w).+(\.\w+)|(\w).+)/';
    const emailReplace = '$1***$2@$3$5***$4';

    /**
     * @Rest\Post("/api/login")
     */
    public function loginAction(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $user = json_decode($request->getContent());
        if (!isset($user->cnpj) || !isset($user->password)) {
            return View::create(new ApiError("Usuário ou senha inválidos"), Response::HTTP_BAD_REQUEST);
        }
        $dbUser = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $user->cnpj]);
        if (is_null($dbUser)) {
            return View::create(new ApiError("Usuário ou senha inválidos"), Response::HTTP_BAD_REQUEST);
        }
        $encoder = $this->get("security.password_encoder");
        if (!$encoder->isPasswordValid($dbUser, $user->password)) {
            return View::create(new ApiError("Usuário ou senha inválidos"), Response::HTTP_BAD_REQUEST);
        }

        if (!$dbUser->isVerified()) {
            if (\Swift_Validate::email($dbUser->getEmail())) {
                $data = [
                    "h" => $dbUser->getId(),
                    "j" => (new \DateTime())->getTimestamp(),
                    "p" => $dbUser->getEmail()
                ];
                $data['t'] = hash_hmac("sha512", json_encode($data), $this->getParameter('internal_key'));
                $encoded = Utils::base64url_encode(gzcompress(json_encode($data), 2));
                $link = $this->get('router')->generate("verify-email", ["data" => $encoded], UrlGeneratorInterface::ABSOLUTE_URL);
                $mailer = $this->get('swiftmailer.mailer.default');

                if (\Swift_Validate::email($dbUser->getEmail())) {
                    //send e-mail from format
                    $message = (new \Swift_Message('Verificação de E-mail - Conecta Tri'))
                        ->setFrom('noreply@conectatri.com.br')
                        ->setTo($user->getEmail())
                        ->setBody(
                            $this->renderView(
                                'email/confirm_email.html.twig',
                                array('link' => $link)
                            ),
                            'text/html'
                        );

                    $result = $mailer->send($message);
                } else {
                    return View::create(new ApiError("O e-mail cadastrado parece ser inválido. Tente se recadastrar utilizando outro e-mail."), Response::HTTP_FAILED_DEPENDENCY);
                }

                if ($result > 0) {
                    return View::create(new ApiError("É necessário verificar seu endereço de email.\nE-mail de verificação reenviado para\n".preg_replace(self::emailRegex, self::emailReplace, $dbUser->getEmail())), Response::HTTP_EXPECTATION_FAILED);
                }
                return View::create(new ApiError("Houve um problema ao tentar enviar o e-mail de verificação"), Response::HTTP_INTERNAL_SERVER_ERROR);
            } else {
                return View::create(new ApiError("O e-mail cadastrado parece ser inválido. Tente se recadastrar utilizando outro e-mail."), Response::HTTP_FAILED_DEPENDENCY);
            }
        }
        $session = new ApiSession();
        $uuid = Uuid::uuid5(Uuid::uuid1(), $dbUser->getCnpj());
        $session->setToken($uuid->toString());
        $session->setRetailer($dbUser);
        $em->persist($session);
        $em->flush();

        $retorno = [
            'token' => $session->getToken(),
            'isRCAVirtual' => $dbUser->isRCAVirtual(),
            'chpac' => $this->getParameter('chave_martins'),
            'email' => $dbUser->getEmail()
        ];

        if($dbUser->isRCAVirtual()) {
            $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $dbUser);
            $acesso = $mc->login();

            if(property_exists($acesso, 'Login')) {
                $saidaAcesso = [];
                $condicoes = $acesso->Login->CondicoesPagamento->CondPgto;
                if(!is_array($condicoes))
                    $condicoes = [$condicoes];

                foreach($condicoes as $condicao) {
                    $saida = [];
                    foreach (get_object_vars($condicao) as $var_name => $var)
                        $saida[$var_name] = $var;
                    $saidaAcesso[] = $saida;
                }

                $retorno['condicoesMartins'] = $saidaAcesso;
                $retorno['previsao'] = $acesso->Login->PrevisaoEntregaTexto;
            }
        }

        return View::create($retorno, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/login")
     */
    public function refreshLoginAction(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();

        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_BAD_REQUEST);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();
        return View::create(new ApiError("Token de sessão válido"), Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/logout")
     */
    public function logoutAction(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_BAD_REQUEST);
        }
        $em->remove($dbToken);
        $em->flush();
        return View::create(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @Rest\Post("/api/fcm")
     */
    public function postFCMAction(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();;
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $fcmToken = $request->get("token");
        $dbFcmToken = new FCMToken();
        $dbFcmToken->setRetailer($dbToken->getRetailer())
            ->setApiSession($dbToken)
            ->setToken($fcmToken);
        $em->persist($dbFcmToken);
        $em->flush();

        return View::create(null, Response::HTTP_CREATED);
    }

    /**
     * @Rest\Get("/api/email/{email}")
     */
    public function getVerifyEmail($email) {
        $valid = \Swift_Validate::email($email);
        return View::create($valid, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/product")
     */
    public function getProducts(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $products = $d->getRepository("AppBundle:Product")->findBy(["retailer" => $dbToken->getRetailer(), "deleted" => false]);
        return View::create($products, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/product/{id}")
     */
    public function getProduct($id, Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $product = $d->getRepository("AppBundle:Product")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($product)) {
            return View::create(new ApiError("Este produto não está cadastrado"), Response::HTTP_NOT_FOUND);
        }
        return View::create($product, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/product")
     */
    public function postProduct(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());

        $product = json_decode($request->getContent());
        $dbProduct = new Product();
        $dbProduct
            ->setName($product->name)
            ->setBrand($product->brand)
            ->setType($product->type)
            ->setEan($product->ean)
            ->setFullDescription($product->full_description)
            ->setQuantity($product->quantity)
            ->setUnit($product->unit)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime())
            ->setDeleted(false)
            ->setRetailer($dbToken->getRetailer());
        $em->persist($dbProduct);
        $em->flush();

        return View::create($dbProduct, Response::HTTP_CREATED);
    }

    /**
     * @Rest\Put("/api/product/{id}")
     */
    public function putProduct(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());

        $product = json_decode($request->getContent());
        $dbProduct = $d->getRepository("AppBundle:Product")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($dbProduct)) {
            return View::create(new ApiError("Este produto não está cadastrado"), Response::HTTP_NOT_FOUND);
        }
        $dbProduct
            ->setName($product->name)
            ->setBrand($product->brand)
            ->setType($product->type)
            ->setEan($product->ean)
            ->setFullDescription($product->full_description)
            ->setQuantity($product->quantity)
            ->setUnit($product->unit)
            ->setUpdatedAt(new \DateTime())
            ->setDeleted(false);
        $em->flush();

        return View::create($dbProduct, Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Delete("/api/product/{id}")
     */
    public function deleteProduct($id, Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $product = $d->getRepository("AppBundle:Product")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($product)) {
            return View::create(new ApiError("Este produto não está cadastrado"), Response::HTTP_NOT_FOUND);
        }
        $product->setUpdatedAt(new \DateTime())
            ->setDeleted(true);
        $em->flush();
        return View::create($product, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/supplier")
     */
    public function getSuppliers(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $suppliers = $d->getRepository("AppBundle:Supplier")->findBy(["retailer" => $dbToken->getRetailer()]);
        return View::create($suppliers, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/supplier/{id}")
     */
    public function getSupplier(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $supplier = $d->getRepository("AppBundle:Supplier")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($supplier)) {
            return View::create(new ApiError("Fornecedor não encontrado"), Response::HTTP_NOT_FOUND);
        }
        return View::create($supplier, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/representative")
     */
    public function getRepresentatives(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representatives = $d->getRepository("AppBundle:Representative")->findBy(["retailer" => $dbToken->getRetailer(), "deleted" => false]);
        $apiRepresentatives = [];
        foreach ($representatives as $representative) {
            $apiRepresentatives[] = new ApiSupplier($representative);
        }
        return View::create($apiRepresentatives, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/representative/{supplierId}")
     */
    public function getSupplierRepresentatives(Request $request, $supplierId) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $supplier = $d->getRepository("AppBundle:Supplier")->find($supplierId);
        $representatives = $d->getRepository("AppBundle:Representative")->findBy(["supplier" => $supplier, "deleted" => false]);
        $apiRepresentatives = [];
        foreach ($representatives as $representative) {
            $apiRepresentatives[] = new ApiSupplier($representative);
        }
        return View::create($apiRepresentatives, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/representative")
     */
    public function postRepresentative(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representative = json_decode($request->getContent());
        $dbRepresentative = $d->getRepository("AppBundle:Representative")->findOneBy(["email" => $representative->contactEmail, "retailer" => $dbToken->getRetailer()]);
        if (!is_null($dbRepresentative)) {
            return View::create(new ApiError("Já existe um representante com o mesmo email"), Response::HTTP_CONFLICT);
        }
        $supplier = $d->getRepository("AppBundle:Supplier")->findOneBy(["cnpj" => $representative->cnpj, "deleted" => false]);
        if (is_null($supplier)) {
            $supplier = new Supplier();
            $supplier->setName($representative->name)
                ->setCnpj($representative->cnpj)
                ->setRetailer($dbToken->getRetailer())
                ->setCreatedAt(new \DateTime())
                ->setUpdatedAt(new \DateTime())
                ->setDeleted(false);
            if(!is_null($representative->minimum_value))
                $supplier->setMinimumValue($representative->minimum_value);
            $em->persist($supplier);
        }
        $dbRepresentative = new Representative();
        $dbRepresentative->setName($representative->contact_name)
            ->setPhone($representative->contact_phone)
            ->setCellphone($representative->contact_cellphone)
            ->setEmail($representative->contact_email)
            ->setSupplier($supplier)
            ->setRetailer($dbToken->getRetailer())
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime())
            ->setDeleted(false);
        $em->persist($dbRepresentative);
        $em->flush();
        return View::create(new ApiSupplier($dbRepresentative), Response::HTTP_CREATED);
    }

    /**
     * @Rest\Put("/api/representative/{id}")
     */
    public function putRepresentative(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representative = json_decode($request->getContent());
        $dbRepresentative = $d->getRepository("AppBundle:Representative")->findOneBy(["email" => $representative->contactEmail, "retailer" => $dbToken->getRetailer()]);
        if (!is_null($dbRepresentative)) {
            if ($dbRepresentative->getId() != $id)
                return View::create(new ApiError("Já existe um representante com o mesmo email"), Response::HTTP_CONFLICT);
        }

        $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($id);
        if (is_null($dbRepresentative)) {
            return View::create(new ApiError("Este representante não está cadastrado"), Response::HTTP_NOT_FOUND);
        }
        $dbRepresentative->getSupplier()
            ->setName($representative->name)
            ->setCnpj($representative->cnpj)
            ->setUpdatedAt(new \DateTime())
            ->setDeleted(false);
        if(!is_null($representative->minimum_value))
            $dbRepresentative->getSupplier()->setMinimumValue($representative->minimum_value);

        $dbRepresentative->setName($representative->contact_name)
            ->setPhone($representative->contact_phone)
            ->setCellphone($representative->contact_cellphone)
            ->setEmail($representative->contact_email)
            ->setUpdatedAt(new \DateTime())
            ->setDeleted(false);
        $em->flush();
        return View::create(new ApiSupplier($dbRepresentative), Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Delete("/api/representative/{id}")
     */
    public function deleteRepresentative(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($id);
        if (is_null($dbRepresentative)) {
            return View::create(new ApiError("Este representante não está cadastrado"), Response::HTTP_NOT_FOUND);
        }
        $dbRepresentative->setDeleted(true)
            ->setUpdatedAt(new \DateTime());
        $reps = $d->getRepository("AppBundle:Representative")->findBy(["supplier" => $dbRepresentative->getSupplier(), "deleted" => false]);
        if (count($reps) == 0) {
            $dbRepresentative->getSupplier()->setDeleted(true);
        }
        $em->flush();
        return View::create(new ApiSupplier($dbRepresentative), Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/listing")
     */
    public function getListings(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbListings = $d->getRepository("AppBundle:Listing")->findBy(["retailer" => $dbToken->getRetailer(), "deleted" => false]);
        foreach ($dbListings as $listing) {
            $em->detach($listing);
            foreach ($listing->getListingProducts() as $product) {
                if ($product->getProduct()->isDeleted() == true) {
                    $listing->removeListingProduct($product);
                }
            }
            foreach ($listing->getRepresentatives() as $representative) {
                if ($representative->isDeleted()) {
                    $listing->removeRepresentative($representative);
                }
            }
        }
        return View::create($dbListings, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/listing")
     */
    public function postListing(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $listing = json_decode($request->getContent());
        $dbListing = new Listing();
        $dbListing->setName($listing->name)
            ->setType($listing->type)
            ->setDescription($listing->description)
            ->setRetailer($dbToken->getRetailer());
        foreach ($listing->listing_products as $product) {
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            if (is_null($dbProduct)) continue;
            $listingProduct = new ListingProduct();
            $listingProduct->setProduct($dbProduct)
                ->setQuantity($product->quantity)
                ->setListing($dbListing);
            $em->persist($listingProduct);
            $dbListing->addListingProduct($listingProduct);
        }
        foreach ($listing->representatives as $representative) {
            $dbSupplier = $d->getRepository("AppBundle:Representative")->find($representative->id);
            if (!is_null($dbSupplier)) $dbListing->addRepresentative($dbSupplier);
        }
        $em->persist($dbListing);
        $em->flush();

        return View::create($dbListing, Response::HTTP_CREATED);
    }

    /**
     * @Rest\Put("/api/listing/{id}")
     */
    public function putListing(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbListing = $d->getRepository("AppBundle:Listing")->find($id);
        if (is_null($dbListing)) {
            return View::create(new ApiError("Esta listagem não está cadastrada"), Response::HTTP_NOT_FOUND);
        }
        $listing = json_decode($request->getContent());
        $tmp = [];
        foreach ($dbListing->getListingProducts() as $product) {
            $rcvProduct = self::arrayContains($listing->listing_products, $product);
            if ($rcvProduct == false) {
                $dbListing->removeListingProduct($product);
                $em->remove($product);
            } else {
                $product->setQuantity($rcvProduct->quantity);
                $tmp[] = $rcvProduct;
            }
        }
        self::array_diff($listing->listing_products, $tmp);
        foreach ($listing->listing_products as $product) {
            $newProduct = new ListingProduct();
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            $newProduct->setProduct($dbProduct)
                ->setQuantity($product->quantity)
                ->setListing($dbListing);
            $em->persist($newProduct);
            $dbListing->addListingProduct($newProduct);
        }
        $tmp = [];
        foreach ($dbListing->getRepresentatives() as $representative) {
            $rcvRepresentative = self::arrayContains($listing->representatives, $representative);
            if ($rcvRepresentative == false) {
                $dbListing->removeRepresentative($representative);
            } else {
                $tmp[] = $rcvRepresentative;
            }
        }
        self::array_diff($listing->suppliers, $tmp);
        foreach ($listing->suppliers as $representative) {
            $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($representative->id);
            $dbListing->addRepresentative($dbRepresentative);
        }
        $dbListing->setUpdatedAt(new \DateTime())
            ->setName($listing->name)
            ->setType($listing->type)
            ->setDescription($listing->description)
            ->setDeleted(false);
        $em->flush();
        return View::create($dbListing, Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Delete("/api/listing/{id}")
     */
    public function deleteListing(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbListing = $d->getRepository("AppBundle:Listing")->find($id);
        if (is_null($dbListing)) {
            return View::create(new ApiError("Esta listagem não está cadastrada"), Response::HTTP_NOT_FOUND);
        }
        $dbListing->setDeleted(true)
            ->setUpdatedAt(new \DateTime());
        $em->flush();
        return View::create($dbListing, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote")
     */
    public function getAllQuotes(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quotes = $d->getRepository("AppBundle:Quote")->createQueryBuilder("q")
            ->where("q.deleted = FALSE")
            ->andWhere("q.retailer = :retailer")
            ->setParameter("retailer", $dbToken->getRetailer())
            ->orderBy("q.createdAt", "DESC")
            ->getQuery()->getResult();
        $responseArray = [];
        foreach($quotes as $quote) {
            $em->detach($quote);
            if (!$quote->isDeleted()) {
                foreach ($quote->getQuoteProducts() as $product) {
                    $em->detach($product);
                    if (!$product->isDeleted()) {
                        foreach ($product->getQuoteSuppliers() as $supplier) {
                            $em->detach($supplier);
                            if ($supplier->getRepresentative()->isDeleted())
                                $product->removeQuoteSupplier($supplier);
                            /* TODO: Add this
                            else
                                $supplier->setRepresentative(new ApiSupplier($supplier->getRepresentative()));
                            */
                        }
                    } else {
                        $quote->removeQuoteProduct($product);
                    }
                }
                $responseArray[] = $quote;
            }
        }
        return View::create($responseArray, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote/current")
     */
    public function getCurrentQuotes(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quotes = $d->getRepository("AppBundle:Quote")->createQueryBuilder("q")
            ->where("q.expiresAt > :date")
            ->andWhere("q.deleted = FALSE")
            ->andWhere("q.closed = FALSE")
            ->andWhere("q.retailer = :retailer")
            ->setParameter("date", new \DateTime())
            ->setParameter("retailer", $dbToken->getRetailer())
            ->orderBy("q.createdAt", "DESC")
            ->getQuery()->getResult();
        $responseArray = [];
        foreach($quotes as $quote) {
            $em->detach($quote);
            if (!$quote->isDeleted()) {
                foreach ($quote->getQuoteProducts() as $product) {
                    $em->detach($product);
                    if (!$product->isDeleted()) {
                        foreach ($product->getQuoteSuppliers() as $supplier) {
                            $em->detach($supplier);
                            if ($supplier->getRepresentative()->isDeleted())
                                $product->removeQuoteSupplier($supplier);
                            /* TODO: Add this
                            else
                                $supplier->setRepresentative(new ApiSupplier($supplier->getRepresentative()));
                            */
                        }
                    } else {
                        $quote->removeQuoteProduct($product);
                    }
                }
                $responseArray[] = $quote;
            }
        }
        return View::create($responseArray, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote/closed")
     */
    public function getClosedQuotes(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quotes = $d->getRepository("AppBundle:Quote")->createQueryBuilder("q")
            ->where("q.expiresAt < :date")
            ->andWhere("q.deleted = FALSE")
            ->andWhere("q.retailer = :retailer")
            ->orWhere("q.closed = TRUE")
            ->andWhere("q.retailer = :retailer")
            ->andWhere("q.deleted = FALSE")
            ->setParameter("date", new \DateTime())
            ->setParameter("retailer", $dbToken->getRetailer())
            ->orderBy("q.createdAt", "DESC")
            ->getQuery()->getResult();
        $responseArray = [];
        foreach($quotes as $quote) {
            $em->detach($quote);
            if (!$quote->isDeleted()) {
                foreach ($quote->getQuoteProducts() as $product) {
                    $em->detach($product);
                    if (!$product->isDeleted()) {
                        foreach ($product->getQuoteSuppliers() as $supplier) {
                            $em->detach($supplier);
                            if ($supplier->getRepresentative()->isDeleted())
                                $product->removeQuoteSupplier($supplier);
                            /* TODO: Add this
                            else
                                $supplier->setRepresentative(new ApiSupplier($supplier->getRepresentative()));
                            */
                        }
                    } else {
                        $quote->removeQuoteProduct($product);
                    }
                }
                $responseArray[] = $quote;
            }
        }
        return View::create($responseArray, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote/current/product/{id}")
     */
    public function getCurrentQuotesByProduct(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quoteProducts = $d->getRepository('AppBundle:QuoteProduct')->findBy(['product' => $id]);

        $quotesIds = array();

        /** @var QuoteProduct $quoteProduct */
        foreach ($quoteProducts as $quoteProduct) {
            if($quoteProduct->getQuote() != null)
                $quotesIds[] = $quoteProduct->getQuote()->getId();
        }

        $quotes = $d->getRepository("AppBundle:Quote")->createQueryBuilder("q")
            ->where("q.expiresAt > :date")
            ->andWhere("q.deleted = FALSE")
            ->andWhere("q.closed = FALSE")
            ->andWhere("q.retailer = :retailer")
            ->andWhere("q.id IN (:quotes)")
            ->setParameter("date", new \DateTime())
            ->setParameter("retailer", $dbToken->getRetailer())
            ->setParameter("quotes", $quotesIds)
            ->orderBy("q.createdAt", "DESC")
            ->getQuery()->getResult();
        $responseArray = [];
        foreach($quotes as $quote) {
            $em->detach($quote);
            if (!$quote->isDeleted()) {
                foreach ($quote->getQuoteProducts() as $product) {
                    $em->detach($product);
                    if (!$product->isDeleted()) {
                        foreach ($product->getQuoteSuppliers() as $supplier) {
                            $em->detach($supplier);
                            if ($supplier->getRepresentative()->isDeleted())
                                $product->removeQuoteSupplier($supplier);
                            /* TODO: Add this
                            else
                                $supplier->setRepresentative(new ApiSupplier($supplier->getRepresentative()));
                            */
                        }
                    } else {
                        $quote->removeQuoteProduct($product);
                    }
                }
                $responseArray[] = $quote;
            }
        }
        return View::create($responseArray, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote/closed/product/{id}")
     */
    public function getClosedQuotesByProduct(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quoteProducts = $d->getRepository('AppBundle:QuoteProduct')->findBy(['product' => $id]);

        $quotesIds = array();

        /** @var QuoteProduct $quoteProduct */
        foreach ($quoteProducts as $quoteProduct) {
            if($quoteProduct->getQuote() != null)
                $quotesIds[] = $quoteProduct->getQuote()->getId();
        }

        $quotes = $d->getRepository("AppBundle:Quote")->createQueryBuilder("q")
            ->where("q.expiresAt < :date")
            ->andWhere("q.deleted = FALSE")
            ->andWhere("q.retailer = :retailer")
            ->orWhere("q.closed = TRUE")
            ->andWhere("q.retailer = :retailer")
            ->andWhere("q.deleted = FALSE")
            ->andWhere("q.id IN (:quotes)")
            ->setParameter("date", new \DateTime())
            ->setParameter("retailer", $dbToken->getRetailer())
            ->setParameter("quotes", $quotesIds)
            ->orderBy("q.createdAt", "DESC")
            ->getQuery()->getResult();
        $responseArray = [];
        foreach($quotes as $quote) {
            $em->detach($quote);
            if (!$quote->isDeleted()) {
                foreach ($quote->getQuoteProducts() as $product) {
                    $em->detach($product);
                    if (!$product->isDeleted()) {
                        foreach ($product->getQuoteSuppliers() as $supplier) {
                            $em->detach($supplier);
                            if ($supplier->getRepresentative()->isDeleted())
                                $product->removeQuoteSupplier($supplier);
                            /* TODO: Add this
                            else
                                $supplier->setRepresentative(new ApiSupplier($supplier->getRepresentative()));
                            */
                        }
                    } else {
                        $quote->removeQuoteProduct($product);
                    }
                }
                $responseArray[] = $quote;
            }
        }
        return View::create($responseArray, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote/{id}/link")
     */
    public function getQuoteLink(Request $request, $id) {
        $url = $this->get('router')->generate('quote_representative', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);
        return View::create($url, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/quote/{id}/updated")
     */
    public function updateQuote(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbQuote = $d->getRepository("AppBundle:Quote")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        $dbQuote->checkForRCAQuote($this->getParameter('chave_martins'), $this->getParameter('url_martins'));
        $em->flush();

        return View::create($dbQuote, Response::HTTP_OK);
    }

    /**
     * @Rest\Patch("/api/quote/{id}")
     */
    public function sendQuoteLink(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbQuote = $d->getRepository("AppBundle:Quote")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($dbQuote)) {
            return View::create(new ApiError("Cotação não encontrada"), Response::HTTP_NOT_FOUND);
        }

        $details = json_decode($request->getContent());
        if(is_null($details)) {
            $force = false;
        } else {
            $force = $details->force;
        }
        if(!$force && !$dbQuote->mustSendToSupplier()) {
            return View::create(new ApiError("Quotação marcada para não enviar."), Response::HTTP_OK);
        }

        $link = $this->get('router')->generate('quote_representative', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);
        $mailer = $this->get('swiftmailer.mailer.default');
        $failed = "<ul>";
        $hasFailed = false;
        $total = 0;
        /** @var QuoteSupplier $quoteSupplier */
        foreach ($dbQuote->getQuoteProducts()[0]->getQuoteSuppliers() as $quoteSupplier) {
            if (!$quoteSupplier->isDeleted() && \Swift_Validate::email($quoteSupplier->getRepresentative()->getEmail())) {
                $message = (new \Swift_Message('Cotação - Conecta Tri'))
                    ->setFrom('noreply@conectatri.com.br')
                    ->setTo($quoteSupplier->getRepresentative()->getEmail())
                    ->setBody(
                        $this->renderView(
                            'email/quote_representative.html.twig',
                            array('link' => $link,
                                'companyName' => $dbToken->getRetailer()->getCompanyName(),
                                'fantasyName' => $dbToken->getRetailer()->getFantasyName(),
                                'expiresAt' => $dbQuote->getExpiresAt())
                        ),
                        'text/html'
                    );
                if (!$mailer->send($message)) {
                    $hasFailed = true;
                    $failed .= "<li>".$quoteSupplier->getRepresentative()->getName()." &lt;".$quoteSupplier->getRepresentative()->getEmail()."&gt;</li>";
                } else {
                    $total++;
                }
            } else if (!$quoteSupplier->isDeleted()) {
                $hasFailed = true;
                $failed .= "<li>".$quoteSupplier->getRepresentative()->getName()." &lt;".$quoteSupplier->getRepresentative()->getEmail()."&gt;</li>";
            }
        }
        $failed .= "</ul>";

        /** @var Quote $dbQuote */
        $dbQuote->setUpdatedAt(new \DateTime());
        $dbQuote->setSendToSupplier(true);
        $em->flush();

        if ($hasFailed && \Swift_Validate::email($dbToken->getRetailer()->getEmail())) {
            $msg = new \Swift_Message(
                'Envio de Cotação no ConectaTri',
                "Os e-mails contendo o endereço de acesso à cotação foram enviados a alguns dos destinatários. Porém, não foi possível enviar aos seguintes: <br>$failed<br><br>Caso este e-mail tenha sido enviado por acidente, pedimos que o desconsidere.<br><br>Obrigado",
                "text/html",
                "utf-8"
            );
            $msg->setFrom(["noreply@conectatri.com.br" => "ConectaTri"]);
            $msg->setTo([$dbToken->getRetailer()->getEmail() => $dbToken->getRetailer()->getFantasyName()]);
        }
        if ($total > 0) {
            return View::create(new ApiError("E-mails enviados com sucesso"), Response::HTTP_OK);
        }
        return View::create(new ApiError("Houve um problema ao enviar os e-mails."), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Post("/api/quote")
     */
    public function postQuote(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quote = json_decode($request->getContent());
        $dbQuote = new Quote();
        $dbQuote->setName($quote->name)
            ->setType($quote->type)
            ->setRetailer($dbToken->getRetailer())
            ->setClosed(false)
            ->setSendToSupplier($quote->send_to_supplier);
        if(property_exists($quote, 'payment_date'))
            $dbQuote->setPaymentDate($quote->payment_date);
        if(property_exists($quote, 'codigo_martins'))
            $dbQuote->setCodeMartins($quote->codigo_martins);

        $em->persist($dbQuote);
        $isFirst = true;
        foreach ($quote->quote_products as $product) {
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            if(is_null($dbProduct))
                continue;
            $quoteProduct = (new QuoteProduct())
                ->setProduct($dbProduct)
                ->setQuote($dbQuote)
                ->setQuantity(0);
            $em->persist($quoteProduct);
            foreach ($product->quote_suppliers as $supplier) {
                $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                if(is_null($dbSupplier))
                    continue;
                if ($isFirst) {
                    $supplierStatus = new QuoteSupplierStatus();
                    $supplierStatus->setRepresentative($dbSupplier);
                    $supplierStatus->setQuote($dbQuote);
                    $em->persist($supplierStatus);
                    $dbQuote->addSupplierStatus($supplierStatus);
                }
                $quoteProduct->setQuantity($supplier->quantity);
                $quoteSupplier = new QuoteSupplier();
                $quoteSupplier->setRepresentative($dbSupplier)
                    ->setQuantity($supplier->quantity)
                    ->setPrice(str_replace(",", ".", $supplier->price))
                    ->setRepresentative($dbSupplier)
                    ->setQuoteProduct($quoteProduct);
                $em->persist($quoteSupplier);
                $quoteProduct->addQuoteSupplier($quoteSupplier);
            }
            $isFirst = false;
            $dbQuote->addQuoteProduct($quoteProduct);
        }
        $dbQuote->checkForRCAQuote($this->getParameter('chave_martins'), $this->getParameter('url_martins'));
        $em->flush();

        return View::create($dbQuote, Response::HTTP_CREATED);
    }

    /**
     * @Rest\Put("/api/quote/{id}")
     */
    public function putQuote(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbQuote = $d->getRepository("AppBundle:Quote")->find($id);
        if (is_null($dbQuote)) {
            return View::create(new ApiError("Esta cotação não está cadastrada"), Response::HTTP_NOT_FOUND);
        }
        $quote = json_decode($request->getContent());
        $tmp = [];
        $isFirst = true;
        /** @var QuoteProduct $product */
        foreach ($dbQuote->getQuoteProducts() as $product) {
            $rcvProduct = self::arrayContains($quote->quote_products, $product);
            if ($rcvProduct == false) {
                $product->setDeleted(true)
                    ->setUpdatedAt(new \DateTime());
            } else {
                $product->setDeleted(false)
                    ->setUpdatedAt(new \DateTime());
                $tmp3 = [];
                foreach ($product->getWinners() as $winner) {
                    $rcvWinner = self::arrayContains($rcvProduct->winners, $winner);
                    if ($rcvWinner == false) {
                        $product->removeWinner($winner);
                    } else {
                        $tmp3[] = $winner;
                    }
                }
                self::array_diff($rcvProduct->winners, $tmp3);
                foreach ($rcvProduct->winners as $winner) {
                    $dbWinner = self::array_item_by_id($product->getQuoteSuppliers(), $winner->id);
                    $product->addWinner($dbWinner);
                }
                $tmp2 = [];
                /** @var QuoteSupplier $supplier */
                foreach ($product->getQuoteSuppliers() as $supplier) {
                    $rcvSupplier = self::arrayContains($rcvProduct->quote_suppliers, $supplier);
                    if ($rcvSupplier == false || (isset($rcvSupplier->deleted) && $rcvSupplier->deleted == true)) {
                        if ($isFirst) {
                            $supplierStatus = $d->getRepository("AppBundle:QuoteSupplierStatus")->findOneBy(["quote" => $dbQuote, "representative" => $supplier->getRepresentative()]);
                            if ($supplierStatus != null) {
                                $dbQuote->removeSupplierStatus($supplierStatus);
                                $em->remove($supplierStatus);
                            }
                        }
                        if ($product->getWinner() == $supplier) $product->setWinner(null);
                        $supplier->setDeleted(true)
                            ->setUpdatedAt(new \DateTime());
                    } else {
                        $product->setQuantity($rcvSupplier->quantity);
                        $supplier->setQuantity($rcvSupplier->quantity)
                            ->setPrice(str_replace(",", ".", $rcvSupplier->price))
                            ->setDeleted(false)
                            ->setUpdatedAt(new \DateTime());
                        if ($isFirst) {
                            $supplierStatus = $d->getRepository("AppBundle:QuoteSupplierStatus")->findOneBy(["quote" => $dbQuote, "representative" => $supplier->getRepresentative()]);
                            if ($supplierStatus == null) {
                                $supplierStatus = new QuoteSupplierStatus();
                                $supplierStatus->setQuote($dbQuote)->setRepresentative($supplier->getRepresentative());
                                $em->persist($supplierStatus);
                            }
                        }
                        $tmp2[] = $supplier;
                    }
                }
                self::array_diff($rcvProduct->quote_suppliers, $tmp2);
                /** @var \stdClass $supplier */
                foreach ($rcvProduct->quote_suppliers as $supplier) {
                    $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                    if ($isFirst) {
                        $supplierStatus = new QuoteSupplierStatus();
                        $supplierStatus->setQuote($dbQuote)->setRepresentative($dbSupplier);
                        $em->persist($supplierStatus);
                    }
                    $quoteSupplier = new QuoteSupplier();
                    $quoteSupplier->setRepresentative($dbSupplier)
                        ->setQuantity($supplier->quantity)
                        ->setPrice(str_replace(",", ".", $supplier->price));
                    $em->persist($quoteSupplier);
                    $product->addQuoteSupplier($quoteSupplier);
                }
                $tmp[] = $rcvProduct;
            }
            $isFirst = false;
        }
        self::array_diff($quote->quote_products, $tmp);
        /** @var \stdClass $product */
        foreach ($quote->quote_products as $product) {
            $newProduct = new QuoteProduct();
            /** @var Product $dbProduct */
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            foreach ($product->quote_suppliers as $supplier) {
                $newSupplier = new QuoteSupplier();
                $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                $newSupplier->setRepresentative($dbSupplier)
                    ->setQuantity($supplier->quantity)
                    ->setPrice(str_replace(",", ".", $supplier->price));
                $em->persist($newSupplier);
                $newProduct->addQuoteSupplier($newSupplier);
            }
            $newProduct->setProduct($dbProduct);
            $em->persist($newProduct);
            $dbQuote->addQuoteProduct($newProduct);
        }
        $dbQuote->setDeleted(false)
            ->setName($quote->name)
            ->setExpiresAt($this->createATOMDateTime($quote->expires_at))
            ->setClosed(isset($quote->closed) ? $quote->closed : false)
            ->setBeginsAt($this->createATOMDateTime($quote->begins_at))
            ->setSendToSupplier($quote->send_to_supplier);
        if(!is_null($quote->payment_date))
            $dbQuote->setPaymentDate($quote->payment_date);
        if(!is_null($quote->codigo_martins))
            $dbQuote->setCodeMartins($quote->codigo_martins);
        $dbQuote->checkForRCAQuote($this->getParameter('chave_martins'), $this->getParameter('url_martins'));

        $em->flush();
        return View::create($dbQuote, Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Delete("/api/quote/{id}")
     */
    public function deleteQuote(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbQuote = $d->getRepository("AppBundle:Quote")->find($id);
        if (is_null($dbQuote)) {
            return View::create(new ApiError("Esta listagem não está cadastrada"), Response::HTTP_NOT_FOUND);
        }
        foreach($dbQuote->getQuoteProducts() as $product) {
            $product->setDeleted(true)
                ->setUpdatedAt(new \DateTime());
            foreach($product->getQuoteSuppliers() as $supplier) {
                $supplier->setDeleted(true)
                    ->setUpdatedAt(new \DateTime());
            }
        }
        $dbQuote->setDeleted(true)
            ->setUpdatedAt(new \DateTime());
        $em->flush();
        return View::create($dbQuote, Response::HTTP_OK);
    }

    /**
     * @Rest\Patch("/api/quote/{id}/suppliers")
     */
    public function sendQuoteLinkToSuppliers(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        /** @var Quote $dbQuote */
        $dbQuote = $d->getRepository("AppBundle:Quote")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($dbQuote)) {
            return View::create(new ApiError("Cotação não encontrada"), Response::HTTP_NOT_FOUND);
        }

        $details = json_decode($request->getContent());
        if(is_null($details)) {
            $force = false;
        } else {
            $force = $details->force;
        }
        if(!$force && !$dbQuote->mustSendToSupplier()) {
            return View::create(new ApiError("Quotação marcada para não enviar."), Response::HTTP_OK);
        }

        $link = $this->get('router')->generate('quote_representative', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);
        $mailer = $this->get('swiftmailer.mailer.default');
        $failed = "<ul>";
        $hasFailed = false;
        $total = 0;

        $representatives = json_decode($request->getContent());
        /** @var \stdClass $representative */
        foreach ($representatives as $representative) {

            $dbRepresentative = $d->getRepository('AppBundle:Representative')->findOneBy(['id' => $representative->id]);

            if (\Swift_Validate::email($dbRepresentative->getEmail())) {
                $message = (new \Swift_Message('Cotação - Conecta Tri'))
                    ->setFrom('noreply@conectatri.com.br')
                    ->setTo($dbRepresentative->getEmail())
                    ->setBody(
                        $this->renderView(
                            'email/quote_representative.html.twig',
                            array('link' => $link,
                                'companyName' => $dbToken->getRetailer()->getCompanyName(),
                                'fantasyName' => $dbToken->getRetailer()->getFantasyName(),
                                'expiresAt' => $dbQuote->getExpiresAt())
                        ),
                        'text/html'
                    );
                if (!$mailer->send($message)) {
                    $hasFailed = true;
                    $failed .= "<li>".$dbRepresentative->getName()." &lt;".$dbRepresentative->getEmail()."&gt;</li>";
                } else {
                    $total++;
                }
            }

        }
        $dbQuote->setUpdatedAt(new \DateTime());
        $dbQuote->setSendToSupplier(true);
        $em->flush();
        $failed .= "</ul>";

        if ($hasFailed && \Swift_Validate::email($dbToken->getRetailer()->getEmail())) {
            $msg = new \Swift_Message(
                'Envio de Cotação no ConectaTri',
                "Os e-mails contendo o endereço de acesso à cotação foram enviados a alguns dos destinatários. Porém, não foi possível enviar aos seguintes: <br>$failed<br><br>Caso este e-mail tenha sido enviado por acidente, pedimos que o desconsidere.<br><br>Obrigado",
                "text/html",
                "utf-8"
            );
            $msg->setFrom(["noreply@conectatri.com.br" => "ConectaTri"]);
            $msg->setTo([$dbToken->getRetailer()->getEmail() => $dbToken->getRetailer()->getFantasyName()]);
        }
        if ($total > 0) {
            return View::create(new ApiError("E-mails enviados com sucesso"), Response::HTTP_OK);
        }
        return View::create(new ApiError("Houve um problema ao enviar os e-mails."), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Get("/api/retailer")
     */
    public function getRetailer(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        return View::create($dbToken->getRetailer(), Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/retailer")
     */
    public function postRetailer(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $retailer = json_decode($request->getContent());
        $dbRetailer = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $retailer->cnpj]);
        if (!is_null($dbRetailer)) {
            if (!$dbRetailer->isVerified() || $dbRetailer->isDeleted()) {
                $dbRetailer
                    ->setCnpj($dbRetailer->getCnpj() . uniqid("_", true))
                    ->setDeleted(true)
                    ->setVerified(false);
                $em->flush();
            } else {
                return View::create(new ApiError("Este CNPJ já está cadastrado"), Response::HTTP_CONFLICT);
            }
        }
        $dbState = $d->getRepository("AppBundle:State")->findOneBy(["uf" => $retailer->state]);
        $dbRetailer = new Retailer();
        $dbRetailer
            ->setCnpj($retailer->cnpj)
            ->setCompanyName($retailer->company_name)
            ->setFantasyName($retailer->fantasy_name)
            ->setEmail($retailer->email)
            ->setAddress($retailer->address)
            ->setNumber($retailer->number)
            ->setDistricit($retailer->district)
            ->setCity($retailer->city)
            ->setState($dbState)
            ->setCep($retailer->cep)
            ->setPhone($retailer->phone)
            ->setCellphone($retailer->cellphone);
        if(property_exists($retailer, 'complement'))
            $dbRetailer->setComplement($retailer->complement);
        $sec = $this->get('security.password_encoder');
        $dbRetailer->setPassword($sec->encodePassword($dbRetailer, $retailer->password))
            ->setRoles("ROLE_USER");
        $em->persist($dbRetailer);
        $em->flush();
        $data = [
            "h" => $dbRetailer->getId(),
            "j" => (new \DateTime())->getTimestamp(),
            "p" => $dbRetailer->getEmail()
        ];
        $data['t'] = hash_hmac("sha512", json_encode($data), $this->getParameter('internal_key'));
        $encoded = Utils::base64url_encode(gzcompress(json_encode($data), 2));
        $link = $this->get('router')->generate("verify-email", ["data" => $encoded], UrlGeneratorInterface::ABSOLUTE_URL);
        $mailer = $this->get('swiftmailer.mailer.default');
        $message = (new \Swift_Message('Verificação de E-mail - Conecta Tri'))
            ->setFrom('noreply@conectatri.com.br')
            ->setTo($dbRetailer->getEmail())
            ->setBody(
                $this->renderView(
                    'email/confirm_email.html.twig',
                    array('link' => $link)
                ),
                'text/html'
            );

        $result = $mailer->send($message);

        if ($result > 0) {
            return View::create(new ApiError("Cadastro efetuado com sucesso. Foi enviado um link de ativação no e-mail cadastrado."), Response::HTTP_CREATED);
        }
        return View::create(new ApiError("Usuário cadastrado com sucesso, porém houve um problema ao tentar enviar o e-mail de verificação."), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Put("/api/retailer")
     */
    public function putRetailer(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $sec = $this->get("security.password_encoder");
        $jsonRequest = json_decode($request->getContent());
        $dbRetailer = $dbToken->getRetailer();
        $retailer = $jsonRequest->retailer;
        if (isset($retailer->password) && strlen($retailer->password) < 8 && strlen($retailer->password) > 0) {
            return View::create(new ApiError("A senha deve ter no mínimo 8 caracteres"), Response::HTTP_BAD_REQUEST);
        }
        if (!isset($jsonRequest->password) || !$sec->isPasswordValid($dbRetailer, $jsonRequest->password)) {
            return View::create(new ApiError("Senha incorreta"), Response::HTTP_BAD_REQUEST);
        }
        $dbState = $d->getRepository("AppBundle:State")->findOneBy(["uf" => $retailer->state]);
        $dbRetailer
            ->setCompanyName($retailer->company_name)
            ->setFantasyName($retailer->fantasy_name)
            ->setAddress($retailer->address)
            ->setNumber($retailer->number)
            ->setDistricit($retailer->district)
            ->setCity($retailer->city)
            ->setState($dbState)
            ->setCep($retailer->cep)
            ->setPhone($retailer->phone)
            ->setCellphone($retailer->cellphone)
            ->setUpdatedAt(new \DateTime());
        if(property_exists($retailer, 'complement'))
            $dbRetailer->setComplement($retailer->complement);
        if (isset($retailer->password) && strlen($retailer->password) >= 8) {
            $dbRetailer
                ->setPassword($sec->encodePassword($dbRetailer, $retailer->password));
        }
        if (isset($retailer->email) && $retailer->email != $dbRetailer->getEmail() && strlen($retailer->email) > 0) {
            $dbRetailer->setVerified(false)->setEmail($retailer->email);
            $data = [
                "h" => $dbRetailer->getId(),
                "j" => (new \DateTime())->getTimestamp(),
                "p" => $dbRetailer->getEmail()
            ];
            $data['t'] = hash_hmac("sha512", json_encode($data), $this->getParameter('internal_key'));
            $encoded = Utils::base64url_encode(gzcompress(json_encode($data), 2));
            $link = $this->get('router')->generate("verify-email", ["data" => $encoded], UrlGeneratorInterface::ABSOLUTE_URL);
            $mailer = $this->get('swiftmailer.mailer.default');
            $message = (new \Swift_Message('Verificação de E-mail - Conecta Tri'))
                ->setFrom('noreply@conectatri.com.br')
                ->setTo($dbRetailer->getEmail())
                ->setBody(
                    $this->renderView(
                        'email/confirm_email.html.twig',
                        array('link' => $link)
                    ),
                    'text/html'
                );

            $result = $mailer->send($message);
            if ($result > 0) {
                $em->flush();
                return View::create(new ApiError("Alteração efetuada com sucesso. Será necessário reativar a conta a partir do link enviado ao e-mail cadastrado."), Response::HTTP_ACCEPTED);
            }
            return View::create(new ApiError("Houve um problema ao tentar enviar o e-mail de verificação, portanto os dados não foram alterados."), Response::HTTP_INTERNAL_SERVER_ERROR);
        } else {
            $em->flush();
            return View::create(new ApiError("Alteração efetuada com sucesso."), Response::HTTP_ACCEPTED);
        }
    }

    /**
     * @Rest\Patch("/api/product")
     */
    public function searchProduct(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $search = json_decode($request->getContent());
        $query = $d->getRepository("AppBundle:Product")->createQueryBuilder("p");
        $results = $query->where("p.name like :product")
            ->andWhere("p.retailer = :retailer")
            ->andWhere("p.deleted = FALSE")
            ->setParameter("product", "%$search->query%")
            ->setParameter("retailer", $dbToken->getRetailer())
            ->getQuery()->getResult();
        return View::create($results, Response::HTTP_OK);
    }

    /**
     * @Rest\Patch("/api/product/all")
     */
    public function searchAllProducts(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $search = json_decode($request->getContent());
        $query = $d->getRepository("AppBundle:Product")->createQueryBuilder("p");
        $results = $query->where("p.name like :product")
            ->andWhere("p.deleted = FALSE")
            ->setParameter("product", "%$search->query%")
            ->groupBy("p.name")
            ->getQuery()->getResult();
        return View::create($results, Response::HTTP_OK);
    }

    /**
     * @Rest\Patch("/api/listing")
     */
    public function searchListing(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $search = json_decode($request->getContent());
        $results = $d->getRepository("AppBundle:Listing")->createQueryBuilder("l")
            ->where("l.name like :listing")
            ->andWhere("l.retailer = :retailer")
            ->andWhere("l.deleted = FALSE")
            ->setParameter("listing", "%$search->query%")
            ->setParameter("retailer", $dbToken->getRetailer())
            ->getQuery()->getResult();
        return View::create($results, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/recovery/begin")
     */
    public function postBeginPasswordRecovery(Request $request) {
        $r = $this->get('router');
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $cnpj = $request->get("cnpj");
        $retailer = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $cnpj]);
        if (is_null($retailer)) {
            return View::create(new ApiError("CNPJ não encontrado"), Response::HTTP_NOT_FOUND);
        }
        $data = [
            "i" => $retailer->getId(),
            "u" => Utils::base64url_encode(hash_hmac("haval128,4", $retailer->getPassword(), $this->getParameter('internal_key'), true)),
            "j" => (new \DateTime())->getTimestamp()
        ];
        $data['z'] = Utils::base64url_encode(hash_hmac("sha256", json_encode($data), $this->getParameter('internal_key'), true));
        $encoded = Utils::base64url_encode(json_encode($data));
        $link = $r->generate("app_pass_recovery", ["token" => $encoded], Router::ABSOLUTE_URL);
        $mailer = $this->get('swiftmailer.mailer.default');
        if (\Swift_Validate::email($retailer->getEmail())) {
            $message = (new \Swift_Message('Recuperação de Senha - Conecta Tri'))
                ->setFrom('noreply@conectatri.com.br')
                ->setTo($retailer->getEmail())
                ->setBody(
                    $this->renderView(
                        'email/password_resetting.html.twig',
                        array('confirmationUrl' => $link)
                    ),
                    'text/html'
                );
        } else {
            return View::create(new ApiError("O e-mail cadastrado parece ser inválido. Tente se recadastrar utilizando outro e-mail."), Response::HTTP_FAILED_DEPENDENCY);
        }
        $result = $mailer->send($message);

        if ($result > 0) {
            return View::create(
                new ApiError("E-mail enviado para\n".preg_replace(self::emailRegex, self::emailReplace, $retailer->getEmail())),
                Response::HTTP_OK);
        }
        return View::create(new ApiError("Houve um problema ao tentar enviar o e-mail de recuperação"), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Post("/api/recovery/end")
     */
    public function postEndPasswordRecovery(Request $request) {
        $d = $this->getDoctrine();
        $pe = $this->get("security.password_encoder");
        $em = $d->getManager();
        $data = json_decode($request->getContent());
        $newData = [
            'i' => $data->i,
            'u' => $data->u,
            'j' => $data->j
        ];
        $hash = $data->z;
        $pwd = $data->p;
        $cmpHash = Utils::base64url_encode(hash_hmac("sha256", json_encode($newData), $this->getParameter('internal_key'), true));
        $time = new \DateTime("-1 days");
        $dataTime = new \DateTime();
        $dataTime->setTimestamp($data->j);
        $retailer = $d->getRepository("AppBundle:Retailer")->find($data->i);
        $passHash = Utils::base64url_encode(hash_hmac("haval128,4", $retailer->getPassword(), $this->getParameter('internal_key'), true));
        if ($cmpHash != $hash || $dataTime < $time || $passHash != $data->u) {
            return View::create(new ApiError("Dados inválidos para recuperação de senha"), Response::HTTP_BAD_REQUEST);
        }
        $retailer->setPassword($pe->encodePassword($retailer, $pwd));
        $em->flush();
        return View::create(new ApiError("Senha alterada com sucesso"), Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Get("/api/state")
     */
    public function getStates() {
        $d = $this->getDoctrine();
        $states = $d->getRepository("AppBundle:State")->findAll();
        return View::create($states, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/martins/boleto")
     */
    public function getBoletos(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $user = $dbToken->getRetailer();
        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
        $acesso = $mc->login();

        $boletos = $mc->getMartinsBoletos();
        $saidaBoletos = [];
        foreach($boletos as $boleto) {
            $saida = [];
            foreach(get_object_vars($boleto) as $varName => $var)
                $saida[$varName] = $var;

            $saidaBoletos[] = $saida;
        }

        return View::create($saidaBoletos, Response::HTTP_OK);
    }

    /**
     * @Rest\POST("/api/martins/info")
     */
    public function getProductInfo(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $user = $dbToken->getRetailer();
        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
        $acesso = $mc->login();

        $productsData = json_decode($request->getContent());
        $productsIds = [];
        foreach($productsData as $productData) {
            $productsIds[] = $productData->id;
        }

        $products = $em->getRepository('AppBundle:Product')->findById($productsIds);
        $infos = $mc->getProductInfoByEan($products);

        $saidaInfos = [];
        foreach($infos as $id => $info) {
            $saida = [];
            foreach(get_object_vars($info) as $varName => $var)
                $saida[$varName] = $var;

            $saidaInfos[$id] = $saida;
        }

        return View::create($saidaInfos, Response::HTTP_OK);
    }

    /**
     * @Rest\POST("/api/martins/quote")
     */
    public function getMartinsQuote(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $user = $dbToken->getRetailer();
        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
        $acesso = $mc->login();

        $productsData = json_decode($request->getContent());

        $productsIds = [];
        $quantitiesByProduct = [];
        foreach($productsData as $productData) {
            $productsIds[] = $productData->id;

            $quantitiesByProduct[$productData->id] = [
                'idMartins' => 0,
                'quantity' => $productData->quantity
            ];
        }

        $products = $em->getRepository('AppBundle:Product')->findById($productsIds);
        $codes = $mc->getMartinsCodeByEan($products);
        if(empty($codes))
            return View::create([], Response::HTTP_OK);

        foreach($codes as $key => $code) {
            $quantitiesByProduct[$key]['idMartins'] = $code;
        }

        $infos = $mc->getMartinsInfos($quantitiesByProduct);
        $saidaInfos = [];
        foreach($infos as $id => $info) {
            $saida = [];
            foreach(get_object_vars($info) as $varName => $var)
                $saida[$varName] = $var;

            $saidaInfos[$id] = $saida;
        }

        return View::create($saidaInfos, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/martins/pedidos")
     */
    public function getMartinsOrders(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $user = $dbToken->getRetailer();
        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
        $acesso = $mc->login();

        $martinsOrders = $d->getRepository('AppBundle:MartinsOrder')->findBy(['retailer' => $user]);

        $orders = array();

        /** @var MartinsOrder $martinsOrder */
        foreach ($martinsOrders as $k => $martinsOrder){
            $order = $mc->trackMartinsPedido($martinsOrder->getCode());
            if(!property_exists($order, 'trackingData'))
                continue;

            $orders[$k]['code'] = $martinsOrder->getCode();
            $orders[$k]['venda'] = $order->trackingData->DataVenda;
            $orders[$k]['pagamento'] = $order->trackingData->DataPagamento;
            $orders[$k]['faturamento'] = $order->trackingData->DataFaturamento;
            $orders[$k]['entrega'] = $order->trackingData->DataEntrega;
            $orders[$k]['conclusao'] = $order->trackingData->DataConclusao;
            $orders[$k]['due'] = $martinsOrder->getPaymentDue();
            $orders[$k]['value'] = $martinsOrder->getTotal();
            $orders[$k]['status'] = $order->PedidoStatus;
            $orders[$k]['order'] = $martinsOrder;
        }

        return View::create($orders, Response::HTTP_OK);
    }


    /**
     * @Rest\Post("/api/martins/pedido")
     */
    public function saveMartinsOrder(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $user = $dbToken->getRetailer();
        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
        $acesso = $mc->login();

        $productsData = json_decode($request->getContent());

        $productsIds = [];
        $quantitiesByProduct = [];
        $quantitiesAndPrices = [];
        $total = 0.0;
        foreach($productsData->products as $productData) {
            $productsIds[] = $productData->id;

            $quantitiesByProduct[$productData->id] = [
                'idMartins' => 0,
                'quantity' => $productData->quantity,
            ];
            $quantitiesAndPrices[$productData->id] = [
                'quantity' => $productData->quantity,
                'price' => $productData->price
            ];
            $total += $productData->price;
        }

        $products = $d->getRepository('AppBundle:Product')->findById($productsIds);

        $codes = $mc->getMartinsCodeByEan($products);
        if(empty($codes))
            return View::create(new ApiError("Nenhum produto encontrado"), Response::HTTP_BAD_REQUEST);

        foreach($codes as $key => $code) {
            $quantitiesByProduct[$key]['idMartins'] = $code;
        }

        //check if product has stock and price not changed
        $hasStock = true;
        $priceChange = false;
        $productsChange = array();
        $mercadorias = $mc->getMartinsInfos($quantitiesByProduct);
        foreach($mercadorias as $key => $mercadoria) {
            if($quantitiesAndPrices[$key]['price'] != $mercadoria->PrecoNormal){
                $priceChange = true;
                $productsChange[$key] =  $mercadoria->CodigoMercadoria;
            }
            if(!$mercadoria->Estoque){
                $hasStock = false;
                $productsChange[$key] =  $mercadoria->CodigoMercadoria;
            }
        }
        if($priceChange)
            return View::create(new ApiError("Alguns produtos tiveram alteração no preço: "
                . implode(", ", $productsChange)), Response::HTTP_BAD_REQUEST);
        if(!$hasStock)
            return View::create(new ApiError("Alguns produtos não tem estoque: "
                . implode(", ", $productsChange)), Response::HTTP_BAD_REQUEST);

        //faz pedido na martins
        $order = $mc->saveMartinsPedido($quantitiesByProduct, $productsData->code);
        if($order->Status == 0 || $order->Status == 2){
            $martinsOrder = (new MartinsOrder())
                ->setCode($order->Pedido->Codigo)
                ->setPaymentDue($productsData->payment_due)
                ->setTotal($total)
                ->setLinkToBill($order->LinkBoleto)
                ->setUpdatedAt(new \DateTime())
                ->setRetailer($user);

            $productsById = [];
            foreach($products as $product) {
                $productsById[$product->getId()] = $product;
            }

            foreach($productsData->products as $productData) {
                $orderProduct = (new OrderProduct())
                    ->setOrder($martinsOrder)
                    ->setProduct($productsById[$productData->id])
                    ->setQuantity($productData->quantity)
                    ->setPrice($productData->price);
                $em->persist($orderProduct);
                $martinsOrder->addOrderProduct($orderProduct);
            }

            $em->persist($martinsOrder);
            $em->flush();
        } else {
            return View::create(new ApiError($order->Mensagem), Response::HTTP_BAD_REQUEST);
        }

        $output = [];
        foreach(get_object_vars($order) as $varName => $var)
            $output[$varName] = $var;

        return View::create($output, Response::HTTP_OK);
    }

    /**
     * Finds one element in an array, searching by ID properties.
     * @param $array array Array in which to search for the element.
     * @param $element object Element whose ID to search for.
     * @return bool|object false if not found, the array's element otherwise.
     */
    private static function arrayContains($array, $element) {
        $arrayProp = false;
        try {
            $var = $array[0]->id;
            $arrayProp = true;
        } catch (\Throwable $x) {}
        $eleProp = false;
        try {
            $var = $element->id;
            $eleProp = true;
        } catch (\Throwable $x) {}
        foreach ($array as $item) {
            if ($arrayProp && $eleProp) {
                if ($item->id == $element->id) {
                    return $item;
                }
            } elseif ($arrayProp) {
                if ($item->id == $element->getId()) {
                    return $item;
                }
            } elseif ($eleProp) {
                if ($item->getId() == $element->id) {
                    return $item;
                }
            } else {
                if ($item->getId() == $element->getId()) {
                    return $item;
                }
            }
        }
        return false;
    }

    private static function array_diff(&$array, $diff) {
        $arrayProp = false;
        try {
            $var = $array[0]->id;
            $arrayProp = true;
        } catch (\Throwable $x) {}
        $eleProp = false;
        try {
            $var = $diff[0]->id;
            $eleProp = true;
        } catch (\Throwable $x) {}
        $ret = [];
        foreach ($array as $aEle) {
            $contains = false;
            foreach ($diff as $dEle) {
                if ($arrayProp && $eleProp) {
                    if ($aEle->id == $dEle->id) {
                        $contains = true;
                        break;
                    }
                } elseif ($arrayProp) {
                    if ($aEle->id == $dEle->getId()) {
                        $contains = true;
                        break;
                    }
                } elseif ($eleProp) {
                    if ($aEle->getId() == $dEle->id) {
                        $contains = true;
                        break;
                    }
                } else {
                    if ($aEle->getId() == $dEle->getId()) {
                        $contains = true;
                        break;
                    }
                }
            }
            if (!$contains) $ret[] = $aEle;
        }
        $array = $ret;
    }

    private static function array_item_by_id($array, $id) {
        foreach ($array as $item) {
            try {
                if ($item->getId() == $id) return $item;
            } catch (\Throwable $x) {
                try {
                    if ($item->id == $id) return $item;
                } catch (\Throwable $xx) {
                    try {
                        if ($item['id'] == $id) return $item;
                    } catch (\Throwable $xxx) {
                        return null;
                    }
                }
            }
        }
        return null;
    }

    private function createATOMDateTime($dateString)
    {
        $timeZone = new \DateTimeZone(date_default_timezone_get());

        $date = \DateTime::createFromFormat(\DateTime::ATOM, $dateString);
        $date->setTimezone($timeZone);

        return $date;
    }
}
