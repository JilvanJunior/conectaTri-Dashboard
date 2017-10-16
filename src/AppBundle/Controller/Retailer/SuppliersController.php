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
                    $supplier->setMinimumValue(str_replace(['.', ','], ['', '.'], $request->get('supplierMinimumValue')));

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
        $states = $em->getRepository('AppBundle:State')->findAll();

        if($request->getMethod() == "POST"){
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
                    $supplier->setMinimumValue(str_replace(['.', ','], ['', '.'], $request->get('supplierMinimumValue')));

                $em->persist($supplier);
            }

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
            'states' => $states,
            'suppliers' => $suppliers,
            'representative' => $representative,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/representante/{id}/deletar", name="deletar_representante")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteRepresentativeAction(Request $request, $id)
    {
        $d = $this->getDoctrine();
        $em = $d->getManager();

        /** @var Representative $dbRepresentative */
        $dbRepresentative = $d->getRepository("AppBundle:Representative")->find($id);
        if (is_null($dbRepresentative)) {
            $this->addFlash(
                'warning',
                'Representante inválido!'
            );

            return $this->redirectToRoute('fornecedores');
        }
        $dbRepresentative->setDeleted(true)
            ->setUpdatedAt(new \DateTime());
        $reps = $d->getRepository("AppBundle:Representative")->findBy(["supplier" => $dbRepresentative->getSupplier(), "deleted" => false]);
        if (count($reps) == 0) {
            $dbRepresentative->getSupplier()->setDeleted(true);
        }
        $em->flush();

        $this->addFlash(
            'success',
            'Representante deletado!'
        );

        return $this->redirectToRoute('fornecedores');
    }
}
