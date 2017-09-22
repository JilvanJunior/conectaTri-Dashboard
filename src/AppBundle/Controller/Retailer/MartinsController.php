<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
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

        $soap = new \SoapClient('http://service.martins.com.br/b2bservice.asmx?WSDL');
        $chave = $this->getParameter('chave_martins');

        $params = [
            'chpac' => $chave,
            'cnpj' => '11822193000182',//$user->getCnpj(),
            'email' => 'aline@martins.com.br',//$user->getEmail(),
            'token' => ''
        ];
        $acesso = $soap->logarUsuario($params)->logarUsuarioResult;

        unset($params['email']);
        $params['Mercadorias'] = [
            900107, 900693, 100490, 2308594, 108063, 107173
        ];
        $mercadorias = $soap->consultarInfoMercadoriasPorCodigo($params)->consultarInfoMercadoriasPorCodigoResult;
        var_dump($mercadorias->MercadoriasInformacoes);exit();

        $boletos = $soap->consultaBoletosPendente($params)->consultaBoletosPendenteResult->boletosPendentes;
        if(property_exists($boletos, 'titulosBoleto')) {
            if(is_array($boletos->titulosBoleto))
                $boletos = $boletos->titulosBoleto;
            else
                $boletos = [$boletos->titulosBoleto];
        } else
            $boletos = [];

        return $this->render('Retailer/martins/boletos.html.twig', [
            'boletos' => $boletos,
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
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }
}
