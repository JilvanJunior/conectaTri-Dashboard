<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/administrador/produtos", name="admin_produtos")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findBy(['deleted' => false]);

        return $this->render('Admin/products/index.html.twig', ['products' => $products]);
    }

    /**
     * @Route("/administrador/produtos/criados", name="admin_chart_line_createdproductsXtime")
     * @param Request $request
     * @return
     */
    public function chart1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->countProductByDate();

        return $this->render('Admin/products/charts/chart_line_createdproductsXtime.html.twig', [
            'products' => $products,
            'productsJSON' => json_encode($products)
        ]);
    }


    /**
     * @Route("/administrador/produtos/historico", name="admin_table_bestprices")
     * @param Request $request
     * @return
     */
    public function chart2Action(Request $request)
    {
        $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findBy(['deleted' => false]);

        return $this->render('Admin/products/charts/chart_table_bestprices.html.twig', ['products' => $products]);
    }

}
