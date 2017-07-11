<?php

namespace AppBundle\Controller\Retailer;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PriceListController extends Controller
{
    /**
     * @Route("/varejista/cotacoes", name="cotacoes")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quotes = $em->getRepository('AppBundle:Quote')->findBy(['retailer' => $user, 'deleted' => false]);

        //quotes types
        $types = [];
        $types['1'] = "Remota";
        $types['2'] = "Presencial";

        //quotes status
        $status = [];
        $status['0'] = "Em Andamento";
        $status['1'] = "Finalizada";

        return $this->render('Retailer/pricelist/index.html.twig', [
            'quotes' => $quotes,
            'types' => $types,
            'status' => $status,
        ]);
    }

    /**
     * @Route("/varejista/cotacao/nova", name="nova_cotacao")
     * @param Request $request
     * @return
     */
    public function addAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quotes = $em->getRepository('AppBundle:Quote')->findBy(['retailer' => $user, 'deleted' => false]);

        //quotes types
        $types = [];
        $types['1'] = "Remota";
        $types['2'] = "Presencial";

        //quotes status
        $status = [];
        $status['0'] = "Em Andamento";
        $status['1'] = "Finalizada";

        return $this->render('Retailer/pricelist/addPriceList.html.twig', [
            'quotes' => $quotes,
            'types' => $types,
            'status' => $status,
        ]);
    }

    /**
     * @Route("/varejista/cotacoes/{id}/editar", name="editar_cotacao")
     * @param Request $request
     * @param $id
     * @return
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->findOneBy(['id' => $id]);

        // replace this example code with whatever you need
        return $this->render('Retailer/pricelist/edit.html.twig', [
            'quote' => $quote,
        ]);
    }

    /**
     * @Route("/varejista/cotacoes/{id}/deletar", name="deletar_cotacao")
     * @param Request $request
     * @param $id
     * @return
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->findOneBy(['id' => $id]);
        $quote->setUpdatedAt(new \DateTime());
        $quote->setDeleted(true);

        $em->flush();

        return $this->redirectToRoute('cotacoes');
    }
}
