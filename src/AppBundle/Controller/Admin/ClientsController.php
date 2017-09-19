<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\ActiveRetailer;
use AppBundle\Entity\Retailer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{
    /**
     * @Route("/administrador/clientes", name="admin_clients")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findWithOrders();

        return $this->render('Admin/clients/index.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/clientesXregiao", name="admin_clients_pie_clientsXregion")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chart1Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findWithOrders();

        return $this->render('Admin/clients/charts/chart_pie_clientXregion.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/clientesXregiao/data", name="admin_clients_pie_clientsXregion_data")
     * @param Request $request
     */
    public function chart1DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('AppBundle:Region')->countRetailerByRegion();
        foreach ($regions as $k => $region){
            $regions[$k]['y'] = (int)$region['y'];
        }
        echo json_encode($regions);
        exit();
    }

    /**
     * @Route("/administrador/clientes/clientesXestado", name="admin_clients_pie_clientsXstate")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chart2Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findWithOrders();

        return $this->render('Admin/clients/charts/chart_pie_clientXstate.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/administrador/clientes/clientesXestado/data", name="admin_clients_pie_clientsXstate_data")
     * @param Request $request
     */
    public function chart2DataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $states = $em->getRepository('AppBundle:State')->countRetailerByState();
        foreach ($states as $k => $state){
            $states[$k]['y'] = (int)$state['y'];
        }
        echo json_encode($states);
        exit();
    }


    /**
     * @Route("/administrador/clientes/cadastrados", name="admin_clients_line_createdaccountsXtime")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chart3Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findWithOrders();

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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chart4Action(Request $request)
    {
        $clients = $this->getDoctrine()->getRepository('AppBundle:Retailer')->findWithOrders();

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

        $res = [];
        $res['clients'] = '';
        $res['actives'] = '';
        if($clients != null) {
            $clients[0]['total'] = $clients[0]['clients'];
            for($i = 1; count($clients) > $i; $i++){
                $clients[$i]['total'] = $clients[$i-1]['total'] + $clients[$i]['clients'];
            }

            $res['clients'] = $clients;
            $res['actives'] = $actives;
        }

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
        $clients = $em->getRepository('AppBundle:Retailer')->findBy(['deleted' => 0, 'verified' => true]);

        $today = new \DateTime();
        $interval = new \DateInterval("P1M"); // 1 month
        $date = $today->sub($interval);

        //count active clients
        $total = 0;
        foreach($clients as $client) {
            $quotes = $client->getQuotes();

            if(count($quotes) > 0) {

                $quote = $quotes[sizeof($quotes) - 1];

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

    /**
     * @Route("/administrador/clientes/rcavirtual", name="admin_change_rca")
     * @param Request $request
     */
    public function changeClientRCA(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent());

        $client = $em->getRepository('AppBundle:Retailer')->find($data->clientId);
        $client->setRCAVirtual($data->state);

        try {
            $em->flush();
            echo(json_encode(['newState' => $data->state]));
        } catch(\Exception $e) {
            echo(json_encode(['newState' => !$data->state]));
        }
        exit();
    }

}
