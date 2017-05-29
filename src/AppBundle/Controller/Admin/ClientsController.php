<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{
    /**
     * @Route("/administrador/clientes", name="admin_clients")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/clients/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administrador/clientes/cotacoesXpedidos", name="admin_clients_scatter_pricelistXorder")
     */
    public function chart1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/clients/charts/chart_scatter_pricelistXorder.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administrador/clientes/pedidosXvalor", name="admin_clients_scatter_orderXvalue")
     */
    public function chart2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/clients/charts/chart_scatter_orderXvalue.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
