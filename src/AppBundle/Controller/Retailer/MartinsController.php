<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteSupplier;
use AppBundle\Entity\Retailer;
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
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user->isRCAVirtual())
            return $this->redirectToRoute('dashboard');

        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
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
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user->isRCAVirtual())
            return $this->redirectToRoute('dashboard');

        $em = $this->getDoctrine()->getManager();
        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);

        $martinsOrders = $em->getRepository('AppBundle:MartinsOrder')->findBy(['retailer' => $user, 'deleted' => false]);
        foreach ($martinsOrders as $k => $martinsOrder){
            if($martinsOrder->getStatus() == 4)
                continue;

            /** @var \stdClass $order */
            $order = $mc->trackMartinsPedido($martinsOrder->getCode());
            if(!property_exists($order, 'trackingData'))
                continue;

            $trackingData = $order->trackingData;

            if(property_exists($trackingData, 'DataVenda'))
                $martinsOrder->setSaleDate($trackingData->DataVenda);
            if(property_exists($trackingData, 'DataPagamento'))
                $martinsOrder->setPaymentDate($trackingData->DataPagamento);
            if(property_exists($trackingData, 'DataFaturamento'))
                $martinsOrder->setBillingDate($trackingData->DataFaturamento);
            if(property_exists($trackingData, 'DataEntrega'))
                $martinsOrder->setDeliveryDate($trackingData->DataEntrega);
            if(property_exists($trackingData, 'DataConclusao'))
                $martinsOrder->setCompletionDate($trackingData->DataConclusao);
            if(property_exists($order, 'PedidoStatus'))
                $martinsOrder->setStatus($order->PedidoStatus);
            if(property_exists($order, 'Mensagem'))
                $martinsOrder->setStatus($order->Mensagem);
            if(property_exists($order, 'Mensagem') && $order->Mensagem == "Pedido Cancelado")
                $martinsOrder->setDeleted(true);

            $martinsOrder->setUpdatedAt(new \DateTime());
        }
        $em->flush();

        $pedidos = $em->getRepository('AppBundle:MartinsOrder')->findBy(['retailer' => $user, 'deleted' => false]);

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

    /**
     * @Route("/varejista/martins/pedido/{id}", name="acompanhar_pedido")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPedidoAction(Request $request, $id)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user->isRCAVirtual())
            return $this->redirectToRoute('dashboard');

        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('AppBundle:MartinsOrder')->findOneBy(['id' => $id, 'retailer' => $user]);
        if($pedido == null)
            return $this->redirectToRoute('access_denied');

        $mc = new MartinsConnector($this->getParameter('chave_martins'),
            $this->getParameter('url_martins'), $user);

        if($pedido->getStatus() != 4){
            /** @var \stdClass $order */
            $order = $mc->trackMartinsPedido($pedido->getCode());
            if(property_exists($order, 'trackingData')){
                $trackingData = $order->trackingData;

                if(property_exists($trackingData, 'DataVenda'))
                    $pedido->setSaleDate($trackingData->DataVenda);
                if(property_exists($trackingData, 'DataPagamento'))
                    $pedido->setPaymentDate($trackingData->DataPagamento);
                if(property_exists($trackingData, 'DataFaturamento'))
                    $pedido->setBillingDate($trackingData->DataFaturamento);
                if(property_exists($trackingData, 'DataEntrega'))
                    $pedido->setDeliveryDate($trackingData->DataEntrega);
                if(property_exists($trackingData, 'DataConclusao'))
                    $pedido->setCompletionDate($trackingData->DataConclusao);
                if(property_exists($order, 'Mensagem'))
                    $pedido->setStatus($order->Mensagem);

                $pedido->setUpdatedAt(new \DateTime());
            }
        }

        $em->flush();

        return $this->render('Retailer/martins/show.html.twig', [
            'pedido' => $pedido,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/martins/pedido/novo/{idQuote}", name="novo_pedido")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addPedidoAction(Request $request, $idQuote)
    {
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user->isRCAVirtual())
            return $this->redirectToRoute('dashboard');

        $em = $this->getDoctrine()->getManager();
        /** @var Quote $quote */
        $quote = $em->getRepository('AppBundle:Quote')->find($idQuote);
        $token = $this->getDoctrine()->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);

        $products = [];
        $quantitiesByProduct = [];
        $usableQuoteSupplier = null;
        foreach($quote->getQuoteProducts() as $quoteProduct) {
            $idProduct = $quoteProduct->getProduct()->getId();
            $products[$idProduct] = $quoteProduct->getProduct();

            $winners = $quoteProduct->getWinners();
            if(empty($winners))
                $winners = $quoteProduct->calculateWinners();
            /** @var QuoteSupplier $quoteSupplier */
            foreach($winners as $quoteSupplier) {
                if($quoteSupplier->getRepresentative()->getSupplier()->isRCA()) {
                    $usableQuoteSupplier = $quoteSupplier;
                    break;
                }
            }

            if(is_null($usableQuoteSupplier))
                continue;

            $quantitiesByProduct[$idProduct] = [
                'idMartins' => 0,
                'quantity' => $usableQuoteSupplier->getQuantity(),
            ];
        }

        $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
        $acesso = $mc->login();
        $codes = $mc->getMartinsCodeByEan($products);

        foreach($products as $product) {
            $idProduct = $product->getId();
            if(!isset($codes[$idProduct]))
                continue;
            $quantitiesByProduct[$idProduct]['idMartins'] = $codes[$idProduct];
        }

        $code = explode(" ", $quote->getPaymentDate())[0];

        $mercadorias = $mc->getMartinsInfos($quantitiesByProduct, $code);
        
        $total = 0.0;
        $mercadoriasSaida = [];
        foreach($mercadorias as $idProduct => $mercadoria) {
            $total += $mercadoria->PrecoNormal;

            $mercadoriasSaida[] = [
                'idProduto' => $idProduct,
                'nome' => $products[$idProduct]->getName(),
                'estoque' => $mercadoria->Estoque,
                'quantidade' => $quantitiesByProduct[$idProduct]['quantity'],
                'preco' => $mercadoria->PrecoNormal,
            ];
        }

        if(is_null($usableQuoteSupplier)) {
            $this->addFlash(
                'warning',
                'Martins não é vencedor de nenhum produto!'
            );
            return $this->redirectToRoute('acompanhar_cotacao', ['id' => $idQuote]);
        }
        if($total < $usableQuoteSupplier->getRepresentative()->getSupplier()->getMinimumValue()) {
            $this->addFlash(
                'warning',
                'Valor mínimo não respeitado!'
            );
            return $this->redirectToRoute('acompanhar_cotacao', ['id' => $idQuote]);
        }

        return $this->render('Retailer/martins/addPedido.html.twig', [
            'mercadorias' => $mercadoriasSaida,
            'prazo' => $quote->getPaymentDate(),
            'previsaoEntrega' => $acesso->Login->PrevisaoEntregaTexto,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
            'token' => $token->getToken(),
            'total' => $total,
            'quoteId' => $idQuote,
        ]);
    }
}
