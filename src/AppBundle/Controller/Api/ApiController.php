<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\ApiSession;
use AppBundle\Entity\Product;
use AppBundle\Entity\Representative;
use AppBundle\Entity\Supplier;
use AppBundle\Model\ApiError;
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
        $user = json_decode($request->getContent());
        if (!isset($user->cnpj) || !isset($user->password)) {
            return View::create(new ApiError("Invalid request"), Response::HTTP_BAD_REQUEST);
        }
        $dbUser = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $user->cnpj]);
        if (is_null($dbUser)) {
            return View::create(new ApiError("Invalid username"/* or password"*/), Response::HTTP_UNAUTHORIZED);
        }
        $encoder = $this->get("security.password_encoder");
        if (!$encoder->isPasswordValid($dbUser, $user->password)) {
            return View::create(new ApiError("Invalid username or password"), Response::HTTP_UNAUTHORIZED);
        }
        $session = new ApiSession();
        $uuid = Uuid::uuid4();
        $session->setToken($uuid->toString());
        $session->setRetailer($dbUser);
        $d->getManager()->persist($session);
        $d->getManager()->flush();
        return View::create([
            "token" => $uuid->toString()
        ], Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/logout/{token}")
     */
    public function logoutAction($token) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_BAD_REQUEST);
        }
        $em->remove($dbToken);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());

        $product = json_decode($request->getContent());
        $dbProduct = new Product();
        $dbProduct
            ->setName($product->name)
            ->setBrand($product->brand)
            ->setCategory($product->category)
            ->setEan($product->ean)
            ->setFullDescription($product->fullDescription)
            ->setDepartment($product->department)
            ->setSection($product->section)
            ->setSubCategory($product->subCategory)
            ->setQuantity($product->quantity)
            ->setUnity($product->unit)
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());

        $product = json_decode($request->getContent());
        if (is_null($product->id)) {
            return View::create(new ApiError("Invalid object received"), Response::HTTP_BAD_REQUEST);
        }
        $dbProduct = $d->getRepository("AppBundle:Product")->find($id);
        if (is_null($dbProduct)) {
            return View::create(new ApiError("Invalid object ID"), Response::HTTP_NOT_FOUND);
        }
        $dbProduct
            ->setName($product->name)
            ->setBrand($product->brand)
            ->setCategory($product->category)
            ->setEan($product->ean)
            ->setFullDescription($product->fullDescription)
            ->setDepartment($product->department)
            ->setSection($product->section)
            ->setSubCategory($product->subCategory)
            ->setQuantity($product->quantity)
            ->setUnity($product->unit)
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representatives = $d->getRepository("AppBundle:Representative")->findBy(["retailer" => $dbToken->getRetailer()]);
        return View::create($representatives, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/representative/{supplierId}")
     */
    public function getSupplierRepresentatives(Request $request, $supplierId) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $supplier = $d->getRepository("AppBundle:Supplier")->find($supplierId);
        $representatives = $d->getRepository("AppBundle:Representative")->findBy(["supplier" => $supplier]);
        return View::create($representatives, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/representative")
     */
    public function postRepresentative(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
        $dbRepresentative->setName($representative->contactName)
            ->setPhone($representative->contactPhone)
            ->setCellphone($representative->contactCellphone)
            ->setEmail($representative->contactEmail)
            ->setSupplier($supplier)
            ->setRetailer($dbToken->getRetailer())
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime())
            ->setDeleted(false);
        $em->persist($dbRepresentative);
        $em->flush();
        return View::create("Success", Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/representative/{id}")
     */
    public function putRepresentative(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $representative = json_decode($request->getContent());

        $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($id);
        if (is_null($dbRepresentative)) {
            return View::create(new ApiError("Este representante não está cadastrado"), Response::HTTP_NOT_ACCEPTABLE);
        }
        $dbRepresentative->setName($representative->contactName)
            ->setPhone($representative->contactPhone)
            ->setCellphone($representative->contactCellphone)
            ->setEmail($representative->contactEmail)
            ->setUpdatedAt(new \DateTime());
        $em->flush();
        return View::create("Success", Response::HTTP_OK);
    }

    /**
     * @Rest\Delete("/api/representative/{id}")
     */
    public function deleteRepresentative(Request $request, $id) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return View::create(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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
        return View::create("Success", Response::HTTP_OK);
    }
}
