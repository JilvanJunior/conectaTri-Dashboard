<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\ApiSession;
use AppBundle\Entity\Product;
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
        if (!isset($user->email) || !isset($user->password)) {
            return new View(new ApiError("Invalid request"), Response::HTTP_BAD_REQUEST);
        }
        $dbUser = $d->getRepository("AppBundle:Retailer")->findOneBy(["email" => $user->email]);
        if (is_null($dbUser)) {
            return new View(new ApiError("Invalid username"/* or password"*/), Response::HTTP_UNAUTHORIZED);
        }
        $encoder = $this->get("security.password_encoder");
        if (!$encoder->isPasswordValid($dbUser, $user->password)) {
            return new View(new ApiError("Invalid username or password"), Response::HTTP_UNAUTHORIZED);
        }
        $session = new ApiSession();
        $uuid = Uuid::uuid4();
        $session->setToken($uuid->toString());
        $session->setRetailer($dbUser);
        $d->getManager()->persist($session);
        $d->getManager()->flush();
        return new View([
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
            return new View(new ApiError("Invalid token"), Response::HTTP_BAD_REQUEST);
        }
        $em->remove($dbToken);
        $em->flush();
        return new View("Success", Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/product")
     */
    public function getProducts(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return new View(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return new View(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $products = $d->getRepository("AppBundle:Product")->findAll();
        return new View($products, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/api/product/{id}")
     */
    public function getProduct($id, Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return new View(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return new View(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken->setLastUsed(new \DateTime());
        $em->flush();

        $product = $d->getRepository("AppBundle:Product")->find($id);
        return new View($product, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/product")
     */
    public function postProduct(Request $request) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $token = $request->headers->get("Api-Token");
        if (is_null($token)) {
            return new View(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
        }
        $dbToken = $d->getRepository("AppBundle:ApiSession")->findOneBy(["token" => $token]);
        if (is_null($dbToken)) {
            return new View(new ApiError("Invalid token"), Response::HTTP_FORBIDDEN);
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

        return new View("Success", Response::HTTP_OK);
    }
}
