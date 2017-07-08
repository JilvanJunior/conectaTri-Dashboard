<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Representative;
use AppBundle\Entity\Supplier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SuppliersController extends Controller
{
    /**
     * @Route("/varejista/fornecedores", name="fornecedores")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $suppliers = $this->getDoctrine()->getRepository('AppBundle:Supplier')->findBy(['retailer' => $user, 'deleted' => false]);

        return $this->render('Retailer/suppliers/index.html.twig', [
            'suppliers' => $suppliers,
        ]);
    }

    /**
     * @Route("/varejista/novo-fornecedor", name="novofornecedor")
     * @param Request $request
     * @return
     */
    public function addSupplierAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $states = $em->getRepository('AppBundle:State')->findAll();

        if($request->getMethod() == "POST"){
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $state = $em->getRepository('AppBundle:State')->findOneById($request->get('state'));

            $supplier = new Supplier();
            $supplier->setName($request->get('name'));
            $supplier->setCnpj($request->get('cnpj'));
            $supplier->setState($state);
            $supplier->setRetailer($user);

            $em->persist($supplier);

            $em->flush();
        }

        return $this->render('Retailer/suppliers/addSuppliers.html.twig', [
            'states' => $states,
        ]);
    }

    /**
     * @Route("/varejista/novo-representante", name="novorepresentante")
     * @param Request $request
     * @return
     */
    public function addRepresentativeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['retailer' => $user]);

        if($request->getMethod() == "POST"){

            $supplier = $em->getRepository('AppBundle:Supplier')->findOneById($request->get('supplier'));

            $representative = new Representative();
            $representative->setName($request->get('name'));
            $representative->setEmail($request->get('email'));
            $representative->setPhone($request->get('phone'));
            $representative->setSupplier($supplier);
            $representative->setRetailer($user);

            $em->persist($representative);

            $em->flush();
        }

        return $this->render('Retailer/suppliers/addRepresentatives.html.twig', [
            'suppliers' => $suppliers,
        ]);
    }
}
