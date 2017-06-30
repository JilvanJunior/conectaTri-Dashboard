<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\ApiSession;
use AppBundle\Entity\Listing;
use AppBundle\Entity\ListingProduct;
use AppBundle\Entity\Product;
use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteProduct;
use AppBundle\Entity\QuoteSupplier;
use AppBundle\Entity\Representative;
use AppBundle\Entity\Retailer;
use AppBundle\Entity\Supplier;
use AppBundle\Model\ApiError;
use AppBundle\Model\ApiSupplier;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Controller\Annotations as Rest;

class ApiController extends FOSRestController
{
    private $key = 'NuZ^?*(7)NWcbl8S+*_m.Bhti<I+L>Y:Yhvy05*o^%mi*OC;.J/vhT]QeCw*uIy9%"NYx(hRrM$D(IKvn{e;ut`-e:[c>89~Ia*xTB!?<HS:8/{O#8sT]xw1\'}^+w83HFUFl12p@NY%^FG_z+C8nk.e$pYNp"J3o+>S4#mY!#/Q-v!ez\']$i%QkvGhhofDOf$xe)lr0_Z\=S{V4np>z>4rkvhP!Qi#GDNuntwg$/u6c.r>)hW+(6:5qd{5kH^6&6';

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
        $oldTokens = $d->getRepository("AppBundle:ApiSession")->createQueryBuilder("s")
            ->where("s.lastUsed < :yesterday")
            ->setParameter("yesterday", new \DateTime("yesterday"))
            ->getQuery()->getResult();
        foreach ($oldTokens as $oldToken) {
            $em->remove($oldToken);
        }
        $previousToken = $d->getRepository("AppBundle:ApiSession")->createQueryBuilder("s")
            ->where("s.lastUsed >= :time")
            ->andWhere("s.retailer = :retailer")
            ->setParameter("time", new \DateTime("15 minutes ago"))
            ->setParameter("retailer", $dbUser)
            ->orderBy("s.lastUsed", "DESC")
            ->getQuery()->setMaxResults(1)->getOneOrNullResult();
        if (is_null($previousToken)) {
            $session = new ApiSession();
            $uuid = Uuid::uuid4();
            $session->setToken($uuid->toString());
            $session->setRetailer($dbUser);
            $em->persist($session);
            $em->flush();
            $previousToken = $session;
        } else {
            $previousToken->setLastUsed(new \DateTime());
            $em->flush();
        }
        return View::create([
            "token" => $previousToken->getToken()
        ], Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/logout")
     */
    public function logoutAction(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Token de sessão inválido"), Response::HTTP_BAD_REQUEST);
        }
        $em->remove($dbToken);
        $oldTokens = $d->getRepository("AppBundle:ApiSession")->createQueryBuilder("s")
            ->where("s.lastUsed < :yesterday")
            ->setParameter("yesterday", new \DateTime("yesterday"))
            ->getQuery()->getResult();
        foreach ($oldTokens as $oldToken) {
            $em->remove($oldToken);
        }
        $em->flush();
        return View::create(null, Response::HTTP_NO_CONTENT);
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

        $products = $d->getRepository("AppBundle:Product")->findAll();
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

        $product = $d->getRepository("AppBundle:Product")->find($id);
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
            ->setDeleted(false);
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
        $dbProduct = $d->getRepository("AppBundle:Product")->find($id);
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

        $product = $d->getRepository("AppBundle:Product")->find($id);
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
            $rcvProduct = $this->arrayContains($listing->listing_products, $product);
            if ($rcvProduct == false) {
                $dbListing->removeListingProduct($product);
                $em->remove($product);
            } else {
                $product->setQuantity($rcvProduct->quantity);
                $tmp[] = $rcvProduct;
            }
        }
        $this->array_diff($listing->listing_products, $tmp);
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
            $rcvRepresentative = $this->arrayContains($listing->representatives, $representative);
            if ($rcvRepresentative == false) {
                $dbListing->removeRepresentative($representative);
            } else {
                $tmp[] = $rcvRepresentative;
            }
        }
        $this->array_diff($listing->suppliers, $tmp);
        foreach ($listing->suppliers as $representative) {
            $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($representative->id);
            $dbListing->addRepresentative($dbRepresentative);
        }
        $dbListing->setUpdatedAt(new \DateTime())
            ->setName($listing->name)
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
    public function getQuotes(Request $request) {
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
            ->andWhere("q.retailer = :retailer")
            ->setParameter("date", new \DateTime("15 days ago"))
            ->setParameter("retailer", $dbToken->getRetailer())
            ->getQuery()->getResult();
        $responseArray = [];
        foreach($quotes as $quote) {
            if ($quote->isDeleted() == false) {
                foreach ($quote->getQuoteProducts() as $product) {
                    if ($product->isDeleted() == false) {
                        foreach ($product->getQuoteSuppliers() as $supplier) {
                            if ($supplier->isDeleted() == true)
                                $product->removeQuoteSupplier($supplier);
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
        $url = $this->get('router')->generate('quote-index', ['id' => $id]);
        return View::create($url, Response::HTTP_OK);
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
            ->setExpiresAt(\DateTime::createFromFormat(\DateTime::ATOM, $quote->expires_at))
            ->setBeginsAt(\DateTime::createFromFormat(\DateTime::ATOM, $quote->begins_at));
        $em->persist($dbQuote);
        foreach ($quote->quote_products as $product) {
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            $quoteProduct = new QuoteProduct();
            $quoteProduct->setProduct($dbProduct)
                ->setQuote($dbQuote);
            $em->persist($quoteProduct);
            foreach ($product->quote_suppliers as $supplier) {
                $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                $quoteSupplier = new QuoteSupplier();
                $quoteSupplier->setRepresentative($dbSupplier)
                    ->setQuantity($supplier->quantity)
                    ->setPrice(str_replace(",", ".", $supplier->price))
                    ->setRepresentative($dbSupplier)
                    ->setQuoteProduct($quoteProduct);
                $em->persist($quoteSupplier);
                $quoteProduct->addQuoteSupplier($quoteSupplier);
            }
            $dbQuote->addQuoteProduct($quoteProduct);
        }
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
        foreach ($dbQuote->getQuoteProducts() as $product) {
            $rcvProduct = $this->arrayContains($quote->quote_products, $product);
            if ($rcvProduct == false) {
                $product->setDeleted(true)
                    ->setUpdatedAt(new \DateTime());
            } else {
                $product->setDeleted(false)
                    ->setUpdatedAt(new \DateTime());
                $tmp2 = [];
                foreach ($product->getQuoteSuppliers() as $supplier) {
                    $rcvSupplier = $this->arrayContains($rcvProduct->quote_suppliers, $supplier);
                    if ($rcvSupplier == false) {
                        $supplier->setDeleted(true)
                            ->setUpdatedAt(new \DateTime());
                    } else {
                        $supplier->setQuantity($rcvSupplier->quantity)
                            ->setPrice(str_replace(",", ".", $rcvSupplier->price))
                            ->setDeleted(true)
                            ->setUpdatedAt(new \DateTime());
                        $tmp2[] = $supplier;
                    }
                }
                $this->array_diff($rcvProduct->quote_suppliers, $tmp2);
                foreach ($rcvProduct->quote_suppliers as $supplier) {
                    $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                    $quoteSupplier = new QuoteSupplier();
                    $quoteSupplier->setRepresentative($dbSupplier)
                        ->setQuantity($supplier->quantity)
                        ->setPrice(str_replace(",", ".", $supplier->price));
                    $em->persist($quoteSupplier);
                    $product->addQuoteSupplier($quoteSupplier);
                }
                $tmp[] = $rcvProduct;
            }
        }
        $this->array_diff($quote->quote_products, $tmp);
        foreach ($quote->quote_products as $product) {
            $newProduct = new QuoteProduct();
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            foreach ($product->quote_suppliers as $supplier) {
                $newSupplier = new QuoteSupplier();
                $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                $newSupplier->setRepresentative($dbSupplier)
                    ->setQuantity($supplier->quantity)
                    ->setPrice(str_replace(",", ".", $supplier->price));
                $newProduct->addQuoteSupplier($newSupplier);
            }
            $newProduct->setProduct($dbProduct);
            $dbQuote->addQuoteProduct($newProduct);
        }
        $dbQuote->setDeleted(false)
            ->setName($quote->name)
            ->setExpiresAt(\DateTime::createFromFormat(\DateTime::ATOM, $quote->expires_at))
            ->setBeginsAt(\DateTime::createFromFormat(\DateTime::ATOM, $quote->begins_at));
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
        $dbToken->getRetailer()->setPassword("");

        return View::create($dbToken->getRetailer(), Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/retailer")
     */
    public function postRetailer(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $retailer = json_decode($request->getContent());
        $dbRetailer = $d->getRepository("AppBundle:Retailer")->findOneBy(["username" => $retailer->cnpj]);
        if (!is_null($dbRetailer)) {
            return View::create(new ApiError("Este CNPJ já está cadastrado"), Response::HTTP_CONFLICT);
        }
        $dbState = $d->getRepository("AppBundle:State")->findOneBy(["uf" => $retailer->state]);
        $dbRetailer = new Retailer();
        $dbRetailer->setUsername($retailer->cnpj)
            ->setCnpj($retailer->cnpj)
            ->setCompanyName($retailer->company_name)
            ->setFantasyName($retailer->fantasy_name)
            ->setEmail($retailer->email)
            ->setAddress($retailer->address)
            ->setCity($retailer->city)
            ->setState($dbState)
            ->setCep($retailer->cep)
            ->setAddress($retailer->address)
            ->setPhone($retailer->phone)
            ->setCellphone($retailer->cellphone);
        $sec = $this->get('security.password_encoder');
        $dbRetailer->setPassword($sec->encodePassword($dbRetailer, $retailer->password))
            ->setRoles("ROLE_USER");
        $em->persist($dbRetailer);
        $em->flush();
        $dbRetailer->setPassword("");
        return View::create($dbRetailer, Response::HTTP_CREATED);
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
        if (isset($retailer->password) && strlen($retailer->password) >= 8 && strlen($retailer->password) > 0) {
            return View::create(new ApiError("A senha deve ter no mínimo 8 caracteres"), Response::HTTP_BAD_REQUEST);
        }
        if (!isset($jsonRequest->password) || !$sec->isPasswordValid($dbRetailer, $jsonRequest->password)) {
            return View::create(new ApiError("Senha incorreta"), Response::HTTP_BAD_REQUEST);
        }
        $dbState = $d->getRepository("AppBundle:State")->findOneBy(["uf" => $retailer->state]);
        $dbRetailer
            ->setCompanyName($retailer->company_name)
            ->setFantasyName($retailer->fantasy_name)
            ->setEmail($retailer->email)
            ->setAddress($retailer->address)
            ->setCity($retailer->city)
            ->setState($dbState)
            ->setAddress($retailer->address)
            ->setCep($retailer->cep)
            ->setPhone($retailer->phone)
            ->setCellphone($retailer->cellphone)
            ->setUpdatedAt(new \DateTime());
        if (isset($retailer->password) && strlen($retailer->password) >= 8) {
            $dbRetailer
                ->setPassword($sec->encodePassword($dbRetailer, $retailer->password));
        }
        $em->flush();
        $dbRetailer->setPassword("");
        return View::create($dbRetailer, Response::HTTP_ACCEPTED);
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
            ->setParameter("product", "%$search->query%")
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
            ->setParameter("listing", "%$search->query%")
            ->getQuery()->getResult();
        return View::create($results, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/recovery/begin")
     */
    public function postBeginPasswordRecovery(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $cnpj = $request->get("cnpj");
        $retailer = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $cnpj]);
        if (is_null($retailer)) {
            return View::create(new ApiError("CNPJ não encontrado"), Response::HTTP_NOT_FOUND);
        }
        $data = [
            "i" => $retailer->getId(),
            "j" => (new \DateTime())->getTimestamp()
        ];
        $data['z'] = hash_hmac("sha512", json_encode($data), $this->key);
        $encoded = $this->base64url_encode(json_encode($data));
        $link = "https://rs.conectatri.com.br/" . $encoded;
        $mailer = $this->get('swiftmailer.mailer.default');
        $msg = new \Swift_Message(
            "Recuperação de Senha ConectaTri",
            "Por favor, utilize o app ConectaTri quando questionado para abrir o link abaixo:<br/><a href=\"$link\">$link</a>",
            "text/html",
            "utf-8"
        );
        $msg->setFrom(["noreply@conectatri.com.br" => "ConectaTri"])
            ->setTo([$retailer->getEmail()]);
        $result = $mailer->send($msg);
        if ($result > 0) {
            return View::create(new ApiError("E-mail enviado para\n".preg_replace('(\w{2}).+(\w{2})@(?:(\w).+(\.\w+)|(\w).+)', '$1***$2@$3$5***$4', $retailer->getEmail())), Response::HTTP_OK);
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
            'j' => $data->j
        ];
        $hash = $data->z;
        $pwd = $data->p;
        $cmpHash = hash_hmac("sha512", json_encode($newData), $this->key);
        $time = new \DateTime("yesterday");
        $dataTime = new \DateTime();
        $dataTime->setTimestamp($data->j);
        if ($cmpHash != $hash || $dataTime < $time) {
            return View::create(new ApiError("Dados inválidos para recuperação de senha"), Response::HTTP_BAD_REQUEST);
        }
        $retailer = $d->getRepository("AppBundle:Retailer")->find($data->i);
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
     * Encodes the given $data with base64 URL variant.
     *
     * This encoding is designed to make binary data survive transport through transport layers that are not 8-bit clean, such as mail bodies.
     *
     * Base64-encoded data takes about 33% more space than the original data.
     *
     * @param $data string The data to encode.
     * @return string|boolean The encoded data, as a string or FALSE on failure.
     */
    private function base64url_encode($data) {
        $encoded = base64_encode($data);
        return rtrim(strtr($encoded, '+/', '-_'), '=');
    }

    /**
     * Finds one element in an array, searching by ID properties.
     * @param $array array Array in which to search for the element.
     * @param $element object Element whose ID to search for.
     *
     * @return boolean|object false if not found, the array's element otherwise.
     */
    private function arrayContains($array, $element) {
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

    private function array_diff(&$array, $diff) {
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

}
