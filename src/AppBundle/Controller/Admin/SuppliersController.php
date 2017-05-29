<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SuppliersController extends Controller
{
    /**
     * @Route("/administrador/fornecedores", name="admin_fornecedores")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/suppliers/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administrador/fornecedores/cotacoesXpedidos", name="admin_suppliers_scatter_pricelistXorder")
     */
    public function chart1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/suppliers/charts/chart_scatter_pricelistXorder.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administrador/fornecedores/contascriadasXtempo", name="admin_suppliers_line_createdaccountsXtime")
     */
    public function chart2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/suppliers/charts/chart_line_createdaccountsXtime.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

}
