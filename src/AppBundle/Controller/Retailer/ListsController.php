<?php

namespace AppBundle\Controller\Retailer;

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

        return $this->render('Retailer/lists/index.html.twig', [
            'listings' => $listings,
        ]);
    }

    /**
     * @Route("/varejista/listas/novalista", name="novalista")
     */
    public function addListAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Retailer/lists/addList.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
