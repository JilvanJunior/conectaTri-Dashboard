<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Listing;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListsController extends Controller
{
    /**
     * @Route("/varejista/listas", name="listas")
     */
    public function indexAction(Request $request)
    {
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
        ]);
    }

    /**
     * @Route("/varejista/listas/novalista", name="novalista")
     */
    public function addListAction(Request $request)
    {
        //type of listings
        $types = [];
        $types['0'] = 'Não Informado';
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';


        if($request->getMethod() == "POST"){
            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $listing = new Listing();
            $listing->setName($request->get('name'));
            $listing->setDescription($request->get('description'));
            $listing->setType($request->get('type'));
            $listing->setRetailer($user);

            $em->persist($listing);

            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('Retailer/lists/addList.html.twig', [
            'types' => $types,
        ]);
    }
}
