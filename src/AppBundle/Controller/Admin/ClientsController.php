<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\ActiveRetailer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{
    /**
     * @Route("/administrador/clientes", name="admin_clients")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findBy(['deleted' => false]);

        return $this->render('Admin/clients/index.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/cotacoesXpedidos", name="admin_clients_scatter_pricelistXorder")
     * @param Request $request
     * @return
     */
    public function chart1Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findBy(['deleted' => false]);

        return $this->render('Admin/clients/charts/chart_scatter_pricelistXorder.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/pedidosXvalor", name="admin_clients_scatter_orderXvalue")
     * @param Request $request
     * @return
     */
    public function chart2Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findBy(['deleted' => false]);

        return $this->render('Admin/clients/charts/chart_scatter_orderXvalue.html.twig', ['clients' => $clients]);
    }


    /**
     * @Route("/administrador/clientes/cadastrados", name="admin_clients_line_createdaccountsXtime")
     * @param Request $request
     * @return
     */
    public function chart3Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findBy(['deleted' => false]);

        return $this->render('Admin/clients/charts/chart_line_createdaccountsXtime.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/cadastrados/data", name="admin_clients_line_createdaccountsXtime_data")
     * @param Request $request
     * @return string
     */
    public function chart3DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('AppBundle:Retailer')->countClientByDate();

        echo json_encode($clients);
        exit();
    }

    /**
     * @Route("/administrador/clientes/ativos", name="admin_clients_line_createdpricelistsXtime")
     * @param Request $request
     * @return
     */
    public function chart4Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findBy(['deleted' => false]);

        return $this->render('Admin/clients/charts/chart_line_createdpricelistsXtime.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/ativos/data", name="admin_clients_line_createdpricelistsXtime_data")
     * @param Request $request
     */
    public function chart4DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('AppBundle:Retailer')->countClientByDate();
        $actives = $em->getRepository('AppBundle:ActiveRetailer')->getQuantityAndDate();

        $clients[0]['total'] = $clients[0]['clients'];
        for($i = 1; count($clients) > $i; $i++){
            $clients[$i]['total'] = $clients[$i-1]['total'] + $clients[$i]['clients'];
        }

        $res = [];
        $res['clients'] = $clients;
        $res['actives'] = $actives;

        echo json_encode($res);
        exit();
    }

    /**
     * @Route("/administrador/clientes/ativos/save", name="admin_clients_line_createdpricelistsXtime_save")
     * @param Request $request
     */
    public function chart4DataSaveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('AppBundle:Retailer')->findBy(['deleted' => 0]);

        $today = new \DateTime();
        $interval = new \DateInterval("P1M"); // 1 month
        $date = $today->sub($interval);

        //count active clients
        $total = 0;
        foreach($clients as $client) {
            $quotes = $client->getQuotes();

            if(count($quotes) > 0) {
                $quote = end($quotes);

                if ($quote->getCreatedAt() > $date)
                    $total++;
            }

        }

        $activeRetailer = new ActiveRetailer();
        $activeRetailer->setQuantity($total);

        $em->persist($activeRetailer);
        $em->flush();

        echo 0;
        exit();
    }

}
