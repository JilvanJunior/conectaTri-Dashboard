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
     * @return \Symfony\Component\HttpFoundation\Response
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
     * @Route("/varejista/cotacao/remota/nova", name="nova_cotacao_remota")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->findOneBy(['id' => $id]);

        if($request->getMethod() == "POST"){

            if($request->get('closed') == "on")
                $quote->setClosed(true);
            else
                $quote->setClosed(false);

            $quote->setName($request->get('name'));
            $beginsAt = date_create_from_format('d/m/Y h:m:s', $request->get('begins-at'));
            $quote->setBeginsAt($beginsAt);
            $expiresAt = date_create_from_format('d/m/Y h:m:s', $request->get('expires-at'));
            $quote->setExpiresAt($expiresAt);
            $quote->setUpdatedAt(new \DateTime());

            $em->persist($quote);

            $em->flush();

            return $this->redirectToRoute('cotacoes');
        }

        return $this->render('Retailer/pricelist/edit.html.twig', [
            'quote' => $quote,
        ]);
    }

    /**
     * @Route("/varejista/cotacoes/{id}/deletar", name="deletar_cotacao")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
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
