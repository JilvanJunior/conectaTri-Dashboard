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
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/fornecedor/novo", name="novofornecedor")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addSupplierAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $states = $em->getRepository('AppBundle:State')->findAll();

        if($request->getMethod() == "POST"){
            $state = $em->getRepository('AppBundle:State')->findOneById($request->get('state'));

            $supplier = new Supplier();
            $supplier->setName($request->get('name'));
            $supplier->setCnpj($request->get('cnpj'));
            $value = $request->get('minimumValue');
            if(!empty($value)) {
                $value = str_replace(".","", $value);
                $value = str_replace(",",".", $value);

                if(is_numeric($value))
                    $supplier->setMinimumValue($value);
            }
            $supplier->setState($state);
            $supplier->setRetailer($user);

            $em->persist($supplier);

            $em->flush();

            $this->addFlash(
                'success',
                'Fornecedor adicionado!'
            );

            $this->addFlash(
                'info',
                'Adicione um representante para o fornecedor.'
            );

            return $this->redirectToRoute('novorepresentante');
        }

        return $this->render('Retailer/suppliers/addSuppliers.html.twig', [
            'states' => $states,
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

            $this->addFlash(
                'success',
                'Representante adicionado!'
            );

            return $this->redirectToRoute('fornecedores');
        }

        return $this->render('Retailer/suppliers/addRepresentatives.html.twig', [
            'suppliers' => $suppliers,
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
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }
}
