<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Representative;
use AppBundle\Entity\Retailer;
use AppBundle\Entity\State;
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
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $supplierRepo = $this->getDoctrine()->getRepository('AppBundle:Supplier');
        $suppliers = $supplierRepo->findBy(['retailer' => $user, 'deleted' => false]);
        if($user->isRCAVirtual()){
            $rca = $supplierRepo->findBy(['rca' => true, 'deleted' => false]);
            $suppliers = array_merge($suppliers, $rca);
        }

        return $this->render('Retailer/suppliers/index.html.twig', [
            'suppliers' => $suppliers,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
            'user' => $user,
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
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $supplierRepo = $this->getDoctrine()->getRepository('AppBundle:Supplier');
        $suppliers = $supplierRepo->findBy(['retailer' => $user, 'deleted' => false]);
        if($user->isRCAVirtual()){
            $rca = $supplierRepo->findBy(['rca' => true, 'deleted' => false]);
            $suppliers = array_merge($suppliers, $rca);
        }
        $states = $em->getRepository('AppBundle:State')->findAll();

        if($request->getMethod() == "POST") {
            $supplierId = $request->get('supplier');

            if($supplierId != 'new') {
                $supplier = $em->getRepository('AppBundle:Supplier')->find($supplierId);
            } else {
                $supplierState = $states[0];

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
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editRepresentativeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $supplierRepo = $this->getDoctrine()->getRepository('AppBundle:Supplier');
        $suppliers = $supplierRepo->findBy(['retailer' => $user, 'deleted' => false]);
        if($user->isRCAVirtual()){
            $rca = $supplierRepo->findBy(['rca' => true, 'deleted' => false]);
            $suppliers = array_merge($suppliers, $rca);
        }
        $representative = $em->getRepository('AppBundle:Representative')->findOneBy(['id' => $id, 'retailer' => $user]);
        if($representative == null)
            return $this->redirectToRoute('access_denied');

        $states = $em->getRepository('AppBundle:State')->findAll();

        if($request->getMethod() == "POST"){
            $supplierId = $request->get('supplier');

            if($supplierId != 'new') {
                $supplier = $em->getRepository('AppBundle:Supplier')->find($supplierId);
            } else {
                $supplier = new Supplier();
            }

            $supplier->setName($request->get('supplierName'))
                ->setCnpj($request->get('supplierCnpj'))
                ->setRetailer($user);

            if($request->get('supplierMinimumValue'))
                $supplier->setMinimumValue(str_replace(['.', ','], ['', '.'], $request->get('supplierMinimumValue')));

            $em->persist($supplier);

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

        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();

        /** @var Representative $dbRepresentative */
        $dbRepresentative = $d->getRepository("AppBundle:Representative")->findOneBy(['id' => $id, 'retailer' => $user]);
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
