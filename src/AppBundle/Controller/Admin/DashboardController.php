<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/administrador/", name="admin_dashboard")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['deleted' => false]);
        $activeRetailers = $em->getRepository('AppBundle:ActiveRetailer')->findAll();
        $retailers = $em->getRepository('AppBundle:Retailer')->findBy(['verified' => true, 'deleted' => false]);
        $qtyRetailer = count($retailers);
        $activeQuotes = count($em->getRepository('AppBundle:Quote')->findBy(['closed' => 0]));

        $topSuppliers = $em->getRepository('AppBundle:Supplier')->findTopSuppliers();

        return $this->render('Admin/dashboard/index.html.twig', [
            'qtySuppliers' => count($suppliers),
            'qtyRetailer' => $qtyRetailer,
            'qtyQuotes' => $activeQuotes,
            'topSuppliers' => $topSuppliers,
        ]);
    }

    /**
     * @Route("/administrador/cotacoes/remotas/data", name="admin_dashboard_remotes_quotes_data")
     */
    public function remotesQuotesDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->countRemote();

        echo json_encode($quotes);
        exit();
    }

    /**
     * @Route("/administrador/cotacoes/presenciais/data", name="admin_dashboard_presential_quotes_data")
     * @param Request $request
     */
    public function presentialQuotesDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->countPresential();

        echo json_encode($quotes);
        exit();
    }

    /**
     * @Route("/administrador/listas/data", name="admin_dashboard_lists_data")
     * @param Request $request
     */
    public function listsDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listings = $em->getRepository('AppBundle:Listings')->findBy(['deleted' => false]);

        echo json_encode($listings);
        exit();
    }

    /**
     * @Route("/administrador/clientes/ativos/data", name="admin_dashboard_active_clients_data")
     */
    public function activeClientsDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $activeRetailers = $em->getRepository('AppBundle:ActiveRetailer')->findBy(['deleted' => false]);

        echo json_encode($activeRetailers);
        exit();
    }

    /**
     * @Route("/administrador/fornecedores/data", name="admin_dashboard_suppliers_data")
     * @param Request $request
     */
    public function suppliersDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['deleted' => false]);

        echo json_encode($suppliers);
        exit();
    }

    /**
     * @Route("/administrador/representantes/data", name="admin_dashboard_representatives_data")
     * @param Request $request
     */
    public function representativesDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $representatives = $em->getRepository('AppBundle:Representative')->findBy(['deleted' => false]);

        echo json_encode($representatives);
        exit();
    }
}
