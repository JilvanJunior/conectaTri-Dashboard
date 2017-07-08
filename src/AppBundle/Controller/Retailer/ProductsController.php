<?php

namespace AppBundle\Controller\Retailer;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/varejista/produtos", name="produtos")
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $products = $user->getProducts();

        return $this->render('Retailer/products/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/varejista/listas/novoproduto", name="novoproduto")
     */
    public function addProductAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Retailer/products/addProducts.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
