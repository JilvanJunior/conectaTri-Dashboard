<?php

namespace AppBundle\Controller\Retailer;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PriceListController extends Controller
{
    /**
     * @Route("/varejista/cotacoes", name="cotacoes")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Retailer/pricelist/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
