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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $suppliers = $this->getDoctrine()->getRepository('AppBundle:Supplier')->findBy(['retailer' => $user, 'deleted' => false]);

        return $this->render('Retailer/suppliers/index.html.twig', [
            'suppliers' => $suppliers,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/representante/novo", name="novorepresentante")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addRepresentativeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['retailer' => $user]);
        $states = $em->getRepository('AppBundle:State')->findAll();

        if($request->getMethod() == "POST") {
            $supplierId = $request->get('supplier');

            if($supplierId != 'new') {
                $supplier = $em->getRepository('AppBundle:Supplier')->findOneById($supplierId);
            } else {
                $stateId = $request->get('supplierState');

                $supplierState = $states[0];
                foreach($states as $state)
                    if($state->getId() == $stateId)
                        $supplierState = $state;

                $supplier = (new Supplier())
                    ->setName($request->get('supplierName'))
                    ->setCnpj($request->get('supplierCnpj'))
                    ->setState($supplierState)
                    ->setRetailer($user);

                if($request->get('supplierMinimumValue'))
                    $supplier->setMinimumValue($request->get('supplierMinimumValue'));

                $em->persist($supplier);
            }

            $representative = new Representative();
            $representative->setName($request->get('name'));
            $representative->setEmail($request->get('email'));
            $representative->setPhone($request->get('phone'));
            $representative->setSupplier($supplier);
            $representative->setRetailer($user);

            $em->persist($representative);

            $em->flush();

            $this->addFlash(
                'success',
                'Representante adicionado!'
            );

            return $this->redirectToRoute('fornecedores');
        }

        return $this->render('Retailer/suppliers/addRepresentatives.html.twig', [
            'states' => $states,
            'suppliers' => $suppliers,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/representante/{id}/editar", name="editar_representante")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editRepresentativeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['retailer' => $user]);
        $representative = $em->getRepository('AppBundle:Representative')->find($id);

        if($request->getMethod() == "POST"){

            $supplier = $em->getRepository('AppBundle:Supplier')->findOneById($request->get('supplier'));

            /** @var Representative $representative */
            $representative->setName($request->get('name'));
            $representative->setEmail($request->get('email'));
            $representative->setPhone($request->get('phone'));
            $representative->setSupplier($supplier);
            $representative->setRetailer($user);
            $representative->setUpdatedAt(new \DateTime());

            $em->persist($representative);

            $em->flush();

            $this->addFlash(
                'success',
                'Representante editado!'
            );

            return $this->redirectToRoute('fornecedores');
        }

        return $this->render('Retailer/suppliers/addRepresentatives.html.twig', [
            'suppliers' => $suppliers,
            'representative' => $representative,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }
}
