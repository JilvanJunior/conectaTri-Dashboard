<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PriceListController extends Controller
{
    /**
     * @Route("/administrador/cotacoes/em-andamento", name="admin_pricelist_inprogress")
     */
    public function inprogressAction(Request $request)
    {
        $quotes = $this->getDoctrine()->getRepository('AppBundle:Quote')->findBy(['deleted' => false]);

        return $this->render('Admin/pricelist/pricelistinprogress.html.twig', [
            'quotes' => $quotes
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/finalizadas", name="admin_pricelist_ended")
     */
    public function endedPricelistAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/pricelist/endedpricelist.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/administrador/cotacoes/pedidos", name="admin_pricelist_sentorders")
     */
    public function sentordersAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/pricelist/sentorders.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/administrador/cotacoes/criadas", name="admin_pricelist_line_createdpricelistsXtime")
     */
    public function cahart1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/pricelist/charts/chart_line_createdpricelistsXtime.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
