<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class SuppliersController extends Controller
{
    /**
     * @Route("/administrador/fornecedores", name="admin_fornecedores")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->groupByCnpj();

        return $this->render('Admin/suppliers/index.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/cotacoesXpedidos", name="admin_suppliers_scatter_pricelistXorder")
     * @param Request $request
     * @return
     */
    public function chart1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->groupByCnpj();

        return $this->render('Admin/suppliers/charts/chart_scatter_pricelistXorder.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/contascriadasXtempo", name="admin_suppliers_line_createdaccountsXtime")
     * @param Request $request
     * @return
     */
    public function chart2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->groupByCnpj();

        return $this->render('Admin/suppliers/charts/chart_line_createdaccountsXtime.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/contascriadasXtempo/data", name="admin_suppliers_line_createdaccountsXtime_data")
     * @param Request $request
     */
    public function chart2DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->countSupplierByDate();

        $data['suppliers'] = $suppliers;
//        $data['representatives'] = $representatives;

        echo json_encode($data);
        exit();
    }

    /**
     * @Route("/administrador/fornecedores/fornecedoresXregiao", name="admin_suppliers_pie_suppliersXregion")
     * @param Request $request
     * @return
     */
    public function chart3Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->groupByCnpj();

        return $this->render('Admin/suppliers/charts/chart_pie_supplierXregion.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/fornecedoresXregiao/data", name="admin_suppliers_pie_suppliersXregion_data")
     * @param Request $request
     */
    public function chart3DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('AppBundle:Region')->countSupplierByRegion();
        foreach ($regions as $k => $region){
            $regions[$k]['y'] = (int)$region['y'];
        }
        echo json_encode($regions);
        exit();
    }

    /**
     * @Route("/administrador/fornecedores/fornecedoresXestado", name="admin_suppliers_pie_suppliersXstate")
     * @param Request $request
     * @return
     */
    public function chart4Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository('AppBundle:Supplier')->groupByCnpj();

        return $this->render('Admin/suppliers/charts/chart_pie_supplierXstate.html.twig', ['suppliers' => $suppliers]);
    }

    /**
     * @Route("/administrador/fornecedores/fornecedoresXestado/data", name="admin_suppliers_pie_suppliersXstate_data")
     * @param Request $request
     */
    public function chart4DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $states = $em->getRepository('AppBundle:State')->countSupplierByState();
        foreach ($states as $k => $state){
            $states[$k]['y'] = (int)$state['y'];
        }
        echo json_encode($states);
        exit();
    }
}
