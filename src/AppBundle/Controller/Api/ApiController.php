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
    /**
     * @Rest\Post("/api/login")
     */
    public function loginAction(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $user = json_decode($request->getContent());
        if (!isset($user->cnpj) || !isset($user->password)) {
            return View::create(new ApiError("Invalid request"), Response::HTTP_BAD_REQUEST);
        }
        $dbUser = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $user->cnpj]);
        if (is_null($dbUser)) {
            return View::create(new ApiError("Invalid username or password"), Response::HTTP_UNAUTHORIZED);
        }
        $encoder = $this->get("security.password_encoder");
        if (!$encoder->isPasswordValid($dbUser, $user->password)) {
            return View::create(new ApiError("Invalid username or password"), Response::HTTP_UNAUTHORIZED);
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
            ->setParameter("time", new \DateTime("15 minutes ago"))
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_BAD_REQUEST);
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
        return View::create("Success", Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/product")
     */
    public function getProducts(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $product = $d->getRepository("AppBundle:Product")->find($id);
        if (is_null($product)) {
            return View::create(new ApiError("Invalid object ID"), Response::HTTP_NOT_FOUND);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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

        return View::create($dbProduct, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/product/{id}")
     */
    public function putProduct(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());

        $product = json_decode($request->getContent());
        $dbProduct = $d->getRepository("AppBundle:Product")->find($id);
        if (is_null($dbProduct)) {
            return View::create(new ApiError("Invalid object ID"), Response::HTTP_NOT_FOUND);
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

        return View::create($dbProduct, Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/product/{id}")
     */
    public function deleteProduct($id, Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $product = $d->getRepository("AppBundle:Product")->find($id);
        if (is_null($product)) {
            return View::create(new ApiError("Invalid object ID"), Response::HTTP_NOT_FOUND);
        }
        $product->setUpdatedAt(new \DateTime())
            ->setDeleted(true);
        $em->flush();
        return View::create("Success", Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/supplier")
     */
    public function getSuppliers(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $supplier = $d->getRepository("AppBundle:Supplier")->findOneBy(["id" => $id, "retailer" => $dbToken->getRetailer()]);
        if (is_null($supplier)) {
            return View::create(new ApiError("Invalid object ID"), Response::HTTP_NOT_FOUND);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representative = json_decode($request->getContent());
        $dbRepresentative = $d->getRepository("AppBundle:Representative")->findOneBy(["email" => $representative->contactEmail, "retailer" => $dbToken->getRetailer()]);
        if (!is_null($dbRepresentative)) {
            return View::create(new ApiError("Já existe um representante com o mesmo email"), Response::HTTP_NOT_ACCEPTABLE);
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
        return View::create($dbRepresentative, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/representative/{id}")
     */
    public function putRepresentative(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representative = json_decode($request->getContent());

        $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($id);
        if (is_null($dbRepresentative)) {
            return View::create(new ApiError("Este representante não está cadastrado"), Response::HTTP_NOT_ACCEPTABLE);
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
        return View::create($dbRepresentative, Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/representative/{id}")
     */
    public function deleteRepresentative(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($id);
        if (is_null($dbRepresentative)) {
            return View::create(new ApiError("Este representante não está cadastrado"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbRepresentative->setDeleted(true)
            ->setUpdatedAt(new \DateTime());
        $reps = $d->getRepository("AppBundle:Representative")->findBy(["supplier" => $dbRepresentative->getSupplier(), "deleted" => false]);
        if (count($reps) == 0) {
            $dbRepresentative->getSupplier()->setDeleted(true);
        }
        $em->flush();
        return View::create($dbRepresentative, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/listing")
     */
    public function getListings(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
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
            $listingProduct->setProduct($dbProduct);
            $listingProduct->setQuantity($product->quantity);
            $dbListing->addListingProduct($listingProduct);
        }
        foreach ($listing->representatives as $representative) {
            $dbSupplier = $d->getRepository("AppBundle:Representative")->find($representative->id);
            if (!is_null($dbSupplier)) $dbListing->addRepresentative($dbSupplier);
        }
        $em->flush();

        return View::create($dbListing, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/listing/{id}")
     */
    public function putListing(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbListing = $d->getRepository("AppBundle:Listing")->find($id);
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
        array_diff($listing->products, $tmp);
        foreach ($listing->products as $product) {
            $newProduct = new ListingProduct();
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            $newProduct->setProduct($dbProduct)
                ->setQuantity($product->quantity);
            $dbListing->addListingProduct($newProduct);
        }
        $tmp = [];
        foreach ($dbListing->getRepresentatives() as $representative) {
            $rcvRepresentative = $this->arrayContains($listing->suppliers, $representative);
            if ($rcvRepresentative == false) {
                $dbListing->removeRepresentative($representative);
            } else {
                $tmp[] = $rcvRepresentative;
            }
        }
        array_diff($listing->suppliers, $tmp);
        foreach ($listing->suppliers as $representative) {
            $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($representative->id);
            $dbListing->addRepresentative($dbRepresentative);
        }
        $em->flush();
        return View::create($dbListing, Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/listing/{id}")
     */
    public function deleteListing(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbListing = $d->getRepository("AppBundle:Listing")->find($id);
        if (is_null($dbListing)) {
            return View::create(new ApiError("Esta listagem não está cadastrada"), Response::HTTP_NOT_ACCEPTABLE);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quotes = $d->getRepository("AppBundle:Quote")->createQueryBuilder("q")
            ->where("q.expiresAt > :date")
            ->andWhere("q.deleted = FALSE")
            ->setParameter("date", new \DateTime("15 days ago"))
            ->getQuery()->getResult();
        return View::create($quotes, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/quote")
     */
    public function postQuote(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $quote = json_decode($request->getContent());
        $dbQuote = new Quote();
        $dbQuote->setName($quote->name)
            ->setType($quote->type)
            ->setRetailer($dbToken->getRetailer())
            ->setExpiresAt(new \DateTime($quote->expires_at));
        foreach ($quote->quote_products as $product) {
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            $quoteProduct = new QuoteProduct();
            $quoteProduct->setProduct($dbProduct);
            foreach ($product->quote_suppliers as $supplier) {
                $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->supplier->id);
                $quoteSupplier = new QuoteSupplier();
                $quoteSupplier->setRepresentative($dbSupplier)
                    ->setQuantity($supplier->quantity)
                    ->setPrice("0.00")
                    ->setRepresentative($dbSupplier);
                $quoteProduct->addQuoteSupplier($quoteSupplier);
            }
            $dbQuote->addQuoteProduct($quoteProduct);
        }
        $em->persist($quote);
        $em->flush();

        return View::create($dbQuote, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/quote/{id}")
     */
    public function putQuote(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_UNAUTHORIZED);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $dbQuote = $d->getRepository("AppBundle:Quote")->find($id);
        $quote = json_decode($request->getContent());
        $tmp = [];
        foreach ($dbQuote->getQuoteProducts() as $product) {
            $rcvProduct = $this->arrayContains($quote->quote_products, $product);
            if ($rcvProduct == false) {
                $dbQuote->removeQuoteProduct($product);
                $product->setDeleted(true);
            } else {
                $tmp2 = [];
                foreach ($product->getQuoteSuppliers() as $supplier) {
                    $rcvSupplier = $this->arrayContains($rcvProduct->quote_suppliers, $supplier);
                    if ($rcvSupplier == false) {
                        $product->removeQuoteSupplier($supplier);
                        $supplier->setDeleted(true);
                    } else {
                        $supplier->setQuantity($rcvSupplier->quantity)
                            ->setPrice($rcvSupplier->price);
                        $tmp2[] = $supplier;
                    }
                }
                // FIXME: Add new quoteSuppliers to existing products
                $tmp[] = $rcvProduct;
            }
        }
        array_diff($quote->quoteProducts, $tmp);
        foreach ($quote->quoteProducts as $product) {
            $newProduct = new QuoteProduct();
            $dbProduct = $d->getRepository("AppBundle:Product")->find($product->product->id);
            foreach ($product->quoteSuppliers as $supplier) {
                $newSupplier = new QuoteSupplier();
                $dbSupplier = $d->getRepository("AppBundle:Representative")->find($supplier->representative->id);
                $newSupplier->setPrice("0.00")
                    ->setQuantity($supplier->quantity)
                    ->setRepresentative($dbSupplier);
                $newProduct->addQuoteSupplier($newSupplier);
            }
            $newProduct->setProduct($dbProduct);
            $dbQuote->addQuoteProduct($newProduct);
        }
        $em->flush();
        return View::create($dbQuote, Response::HTTP_OK);
    }

    //TODO: Delete quote


    /**
     * Finds one element in an array, searching by ID properties.
     * @param $array array Array in which to search for the element.
     * @param $element object Element whose ID to search for.
     *
     * @return boolean|object false if not found, the array's element otherwise.
     */
    private function arrayContains($array, $element) {
        foreach ($array as $item) {
            if ($item->id == $element->id) {
                return $item;
            }
        }
        return false;
    }

}
