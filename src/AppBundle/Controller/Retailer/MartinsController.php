<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
use AppBundle\Service\MartinsConnector;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MartinsController extends Controller
{
    /**
     * @Route("/varejista/martins/boletos", name="boletos_martins")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function boletosAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user->isRCAVirtual())
            return $this->redirectToRoute('dashboard');

        $mc = new MartinsConnector($this->getParameter('chave_martins'), $user);
        $acesso = $mc->login();

        $boletos = $mc->getMartinsBoletos();

        return $this->render('Retailer/martins/boletos.html.twig', [
            'boletos' => $boletos,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/martins/pedidos", name="pedidos_martins")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pedidosAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user->isRCAVirtual())
            return $this->redirectToRoute('dashboard');

        $em = $this->getDoctrine()->getManager();
        $pedidos = $em->getRepository('AppBundle:Quote')->getMartinsQuotes($user);

        $types = [
            '1' => "Remota",
            '2' => "Presencial"
        ];

        return $this->render('Retailer/martins/pedidos.html.twig', [
            'pedidos' => $pedidos,
            'types' => $types,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }
}
