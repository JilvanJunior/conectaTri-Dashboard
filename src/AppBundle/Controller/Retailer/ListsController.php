<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\ApiSession;
use AppBundle\Entity\Listing;
use AppBundle\Entity\ListingProduct;
use AppBundle\Entity\Product;
use AppBundle\Entity\Retailer;
use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListsController extends Controller
{
    /**
     * @Route("/varejista/listas", name="listas")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findBy(['retailer' => $user, 'deleted' => false]);

        //type of listings
        $types = [];
        $types['0'] = 'Não Informado';
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';

        return $this->render('Retailer/lists/index.html.twig', [
            'listings' => $listings,
            'types' => $types,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/listas/novalista", name="novalista")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addListAction(Request $request)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        //type of listings
        $types = [];
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';

        if($request->getMethod() == "POST"){

            $requestData = json_decode($request->getContent());
            $productsIds = $requestData->products;
            $listing = new Listing();
            $listing->setName($requestData->name);
            $listing->setDescription($requestData->description);
            $listing->setType($requestData->type);
            $listing->setRetailer($user);

            $em->persist($listing);

            $em->flush();

            $id = $listing->getId();

            //remove not added listingProducts
            $em->getRepository('AppBundle:ListingProduct')->removeExcludedListingProducts($id, $productsIds);

            //add news listingProducts
            foreach ($productsIds as $productsId) {
                $listingProduct = $em->getRepository('AppBundle:ListingProduct')->findBy(['listing' => $listing, 'product' => $productsId]);

                if($listingProduct == null) {
                    $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $productsId, 'deleted' => false]);

                    $listingProduct = new ListingProduct();
                    $listingProduct->setQuantity(1);
                    /** @var Listing $listing */
                    $listingProduct->setListing($listing);
                    /** @var Product $product */
                    $listingProduct->setProduct($product);

                    $em->persist($listingProduct);
                    $em->flush();
                }
            }

            $this->addFlash(
                'success',
                'Lista adicionada!'
            );

            $this->addFlash(
                'info',
                'Selecione os produtos para adicionar à lista.'
            );

            //return $this->redirectToRoute('lista_produtos', ['id' => $listing->getId()]);
            return $this->json(['message' => 'Lista salva com sucesso!']);
        }

        $products = $em->getRepository('AppBundle:Product')->findBy(['retailer' => $user,'deleted' => false]);
        $token = $this->getDoctrine()->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);

        if (is_null($token)) {
            $d = $this->getDoctrine();
            $em = $d->getManager();
            /** @var Retailer $dbUser */
            $dbUser = $this->get('security.token_storage')->getToken()->getUser();
            $session = new ApiSession();
            $uuid = Uuid::uuid5(Uuid::uuid1(), $dbUser->getCnpj());
            $session->setToken($uuid->toString());
            $session->setRetailer($dbUser);
            $em->persist($session);
            $em->flush();
            $token = $session;
        }

        return $this->render('Retailer/lists/addList.html.twig', [
            'types' => $types,
            'username' => $user->getFantasyName(),
            'products' => $products,
            'userIsRCA' => $user->isRCAVirtual(),
            'token' => $token->getToken()
        ]);
    }

    /**
     * @Route("/varejista/listas/deletar/{id}", name="deletar_lista")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $listing = $em->getRepository('AppBundle:Listing')->findOneBy(['id' => $id]);
        $listing->setUpdatedAt(new \DateTime());
        $listing->setDeleted(true);

        $em->flush();

        $this->addFlash(
            'success',
            'Lista deletada!'
        );

        return $this->redirectToRoute('listas');
    }

    /**
     * @Route("/varejista/lista/{id}/editar", name="lista_editar")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Listing $list */
        $list = $em->getRepository('AppBundle:Listing')->findOneById($id);
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $products = $em->getRepository('AppBundle:Product')->findBy(['retailer' => $user,'deleted' => false]);
        $token = $em->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);

        //type of listings
        $types = [];
        $types['0'] = 'Não Informado';
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';

        if($request->getMethod() == "POST") {
            $requestData = json_decode($request->getContent());
            $productsIds = $requestData->products;

            $list->setName($requestData->name);
            $list->setDescription($requestData->description);
            $list->setType($requestData->type);
            $list->setRetailer($user);

            $id = $list->getId();

            //remove not added listingProducts
            $em->getRepository('AppBundle:ListingProduct')->removeExcludedListingProducts($id, $productsIds);

            //add news listingProducts
            foreach ($productsIds as $productsId) {
                $listingProduct = $em->getRepository('AppBundle:ListingProduct')->findBy(['listing' => $list, 'product' => $productsId]);

                if($listingProduct == null) {
                    $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $productsId, 'deleted' => false]);

                    $listingProduct = new ListingProduct();
                    $listingProduct->setQuantity(1);
                    /** @var Listing $listing */
                    $listingProduct->setListing($list);
                    /** @var Product $product */
                    $listingProduct->setProduct($product);

                    $em->persist($listingProduct);
                }
            }

            $em->flush();

            return $this->json([ 'msg' => 'ok' ]);
        }

        return $this->render('Retailer/lists/addList.html.twig', [
            'list' => $list,
            'products' => $products,
            'token' => $token->getToken(),
            'types' => $types,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/lista/{id}/produtos/quantidade", name="lista_produtos_quantidade")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addListingProductAction(Request $request, $id)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $listing = $em->getRepository('AppBundle:Listing')->find($id);

        return $this->render('Retailer/lists/listingProducts.html.twig', [
            'listing' => $listing,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/lista/{id}/produtos/quantidade/data", name="lista_produtos_quantidade_data")
     * @param Request $request
     * @param $id
     */
    public function addListingProductDataAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $listingProducts = $em->getRepository('AppBundle:ListingProduct')->findBy(['listing' => $id]);
        $data = [];

        if($request->getMethod() == "POST"){

            $data = $request->get('data');
            foreach ($data as $k => $item){
                $listingProduct = $em->getRepository('AppBundle:ListingProduct')->findOneBy(['id' => $k]);

                $listingProduct->setQuantity($item['quantity']);

                $em->persist($listingProduct);
            }
            $em->flush();
        }

        /** @var ListingProduct $listingProduct */
        foreach ($listingProducts as $listingProduct) {
            $tmp['id'] = $listingProduct->getId();
            $tmp['product'] = $listingProduct->getProduct()->getName();
            $tmp['quantity'] = $listingProduct->getQuantity();

            $data['data'][] = $tmp;
        }

        echo json_encode($data);
        exit();
    }
}
