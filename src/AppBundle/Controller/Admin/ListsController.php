<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListsController extends Controller
{
    /**
     * @Route("/administrador/listas", name="admin_listas")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findBy(['deleted' => false]);

        //type of listings
        $types = [];
        $types['0'] = 'Não Informado';
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';

        return $this->render('Admin/lists/index.html.twig', [
            'listings' => $listings,
            'types' => $types,
        ]);
    }

    /**
     * @Route("/administrador/listas/por-data/{date}", name="admin_listas_date")
     * @param Request $request
     * @param $date
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dateAction(Request $request, $date)
    {
        $listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findByDate($date);

        //type of listings
        $types = [];
        $types['0'] = 'Não Informado';
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';

        return $this->render('Admin/lists/index.html.twig', [
            'listings' => $listings,
            'types' => $types,
        ]);
    }

    /**
     * @Route("/administrador/listas/criadas", name="admin_lists_created")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chart1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listings = $em->getRepository('AppBundle:Listing')->countListingsByDate();

        return $this->render('Admin/lists/charts/chart_line_createdlists.html.twig', [
            'listings' => $listings,
        ]);
    }

    /**
     * @Route("/administrador/listas/criadas/data", name="admin_lists_created_data")
     * @param Request $request
     */
    public function chart1DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listings = $em->getRepository('AppBundle:Listing')->countListingsByDate();

        echo json_encode($listings);
        exit();
    }
}
