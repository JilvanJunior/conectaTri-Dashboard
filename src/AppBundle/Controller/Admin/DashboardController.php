<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/administrador/", name="admin_dashboard")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['deleted' => false]);
        $activeRetailers = $em->getRepository('AppBundle:ActiveRetailer')->findAll();
        $qtyRetailer = ($activeRetailers == null ? 0 : end($activeRetailers)->getQuantity());
        $activeQuotes = $em->getRepository('AppBundle:Quote')->countActives();

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
        $quotes = $em->getRepository('AppBundle:Quote')->findBy(['type' => 1, 'deleted' => false]);

        echo json_encode($quotes);
        exit();
    }

    /**
     * @Route("/administrador/cotacoes/presenciais/data", name="admin_dashboard_presential_quotes_data")
     */
    public function presentialQuotesDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $quotes = $em->getRepository('AppBundle:Quote')->findBy(['type' => 2, 'deleted' => false]);

        echo json_encode($quotes);
        exit();
    }

    /**
     * @Route("/administrador/listas/data", name="admin_dashboard_lists_data")
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
     */
    public function representativesDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $representatives = $em->getRepository('AppBundle:Representative')->findBy(['deleted' => false]);

        echo json_encode($representatives);
        exit();
    }
}
