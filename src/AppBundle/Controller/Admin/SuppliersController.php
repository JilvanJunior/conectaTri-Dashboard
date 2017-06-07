<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SuppliersController extends Controller
{
    /**
     * @Route("/administrador/fornecedores", name="admin_fornecedores")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        $suppliers = $this->getDoctrine()->getRepository('AppBundle:Supplier')->findBy(['deleted' => false]);

        return $this->render('Admin/suppliers/index.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/cotacoesXpedidos", name="admin_suppliers_scatter_pricelistXorder")
     * @param Request $request
     * @return
     */
    public function chart1Action(Request $request)
    {
        $suppliers = $this->getDoctrine()->getRepository('AppBundle:Supplier')->findBy(['deleted' => false]);

        return $this->render('Admin/suppliers/charts/chart_scatter_pricelistXorder.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/contascriadasXtempo", name="admin_suppliers_line_createdaccountsXtime")
     * @param Request $request
     * @return
     */
    public function chart2Action(Request $request)
    {
        $suppliers = $this->getDoctrine()->getRepository('AppBundle:Supplier')->findBy(['deleted' => false]);

        return $this->render('Admin/suppliers/charts/chart_line_createdaccountsXtime.html.twig', ['suppliers' => $suppliers]);
    }

}
