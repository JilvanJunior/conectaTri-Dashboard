<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PriceListController extends Controller
{
    /**
     * @Route("/administrador/cotacoes/em-andamento", name="admin_pricelist_inprogress")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function inprogressAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->getInProgress();

        return $this->render('Admin/pricelist/pricelistinprogress.html.twig', [
            'quotes' => $quotes
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/finalizadas", name="admin_pricelist_ended")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function endedPricelistAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->getEnded();

        return $this->render('Admin/pricelist/endedpricelist.html.twig', [
            'quotes' => $quotes
        ]);
    }


    /**
     * @Route("/administrador/cotacoes/pedidos", name="admin_pricelist_sentorders")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sentOrdersAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/pricelist/sentorders.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/por-cliente/{id}", name="admin_pricelist_client")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function clientAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->findBy(['retailer' => $id, 'deleted' => false]);

        return $this->render('Admin/pricelist/endedpricelist.html.twig', [
            'quotes' => $quotes
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/por-fornecedor/{id}", name="admin_pricelist_supplier")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function supplierAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->findBySupplier($id);

        return $this->render('Admin/pricelist/endedpricelist.html.twig', [
            'quotes' => $quotes
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/por-produto/{id}", name="admin_pricelist_product")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function productAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->findByProduct($id);

        return $this->render('Admin/pricelist/endedpricelist.html.twig', [
            'quotes' => $quotes
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/por-data/{date}", name="admin_pricelist_date")
     * @param Request $request
     * @param $date
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dateAction(Request $request, $date)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->findByDate($date);

        return $this->render('Admin/pricelist/endedpricelist.html.twig', [
            'quotes' => $quotes
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/criadas", name="admin_pricelist_line_createdpricelistsXtime")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chart1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->countQuotesByDate();

        return $this->render('Admin/pricelist/charts/chart_line_createdpricelistsXtime.html.twig', [
            'quotes' => $quotes,
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/criadas/datas", name="admin_pricelist_line_createdpricelistsXtime_data")
     * @param Request $request
     */
    public function chart1DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->countQuotesByDate();

        $data['quotes'] = $quotes;

        echo json_encode($data);
        exit();
    }
}
