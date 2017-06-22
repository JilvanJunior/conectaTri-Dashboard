<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListsController extends Controller
{
    /**
     * @Route("/administrador/listas", name="admin_listas")
     */
    public function indexAction(Request $request)
    {
        $listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findBy(['deleted' => false]);

        return $this->render('Admin/lists/index.html.twig', [
            'listings' => $listings
        ]);
    }

    /**
     * @Route("/administrador/listas/criadas", name="admin_lists_created")
     */
    public function chart1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/lists/charts/chart_line_createdlists.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

}
