<?php

namespace AppBundle\Controller\Retailer;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SuppliersController extends Controller
{
    /**
     * @Route("/varejista/fornecedores", name="fornecedores")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('retailer/suppliers/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/varejista/novofornecedor", name="novofornecedor")
     */
    public function addSupplierAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('retailer/suppliers/addSuppliers.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
