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
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->productWithMinPrice();

        return $this->render('Admin/products/index.html.twig', ['products' => $products]);
    }

    /**
     * @Route("/administrador/produtos/por-cotacao/{id}", name="admin_produtos_quote")
     * @param Request $request
     * @param $id
     * @return
     */
    public function productsByQuoteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findByQuote($id);

        return $this->render('Admin/products/index.html.twig', ['products' => $products]);
    }

    /**
     * @Route("/administrador/produtos/por-lista/{id}", name="admin_produtos_list")
     * @param Request $request
     * @param $id
     * @return
     */
    public function productsByListAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findByList($id);

        return $this->render('Admin/products/index.html.twig', ['products' => $products]);
    }

    /**
     * @Route("/administrador/produtos/por-data/{date}", name="admin_produtos_date")
     * @param Request $request
     * @param $date
     * @return
     */
    public function productsByDateAction(Request $request, $date)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findByDate($date);

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
