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

        return $this->render('Admin/dashboard/index.html.twig', [
            'qtySuppliers' => count($suppliers),
            'qtyRetailer' => $qtyRetailer,
            'qtyQuotes' => $activeQuotes
        ]);
    }
}
