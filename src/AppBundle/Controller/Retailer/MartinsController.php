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
        $pedidos = $em->getRepository('AppBundle:MartinsOrder')->findBy(['retailer' => $user]);

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
        $pedido = $em->getRepository('AppBundle:MartinsOrder')->findOneById($id);

        $status = [
            '0' => 'Pedido',
            '1' => 'Pagamento',
            '2' => 'Armazém',
            '3' => 'Enviado',
            '4' => 'Entregue',
        ];

        return $this->render('Retailer/martins/show.html.twig', [
            'pedido' => $pedido,
            'status' => $status,
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
        $quote = $em->getRepository('AppBundle:Quote')->findOneById($idQuote);
        $token = $this->getDoctrine()->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);

        $products = [];
        $quantitiesByProduct = [];
        foreach($quote->getQuoteProducts() as $quoteProduct) {
            $idProduct = $quoteProduct->getProduct()->getId();
            $products[$idProduct] = $quoteProduct->getProduct();

            $usableQuoteSupplier = null;
            /** @var QuoteSupplier $quoteSupplier */
            foreach($quoteProduct->getWinners() as $quoteSupplier) {
                if($quoteSupplier->getRepresentative()->getSupplier()->isRCA()) {
                    $usableQuoteSupplier = $quoteSupplier;
                    break;
                }
            }
            if(is_null($usableQuoteSupplier)) {
                foreach($quoteProduct->getQuoteSuppliers() as $quoteSupplier) {
                    if($quoteSupplier->getRepresentative()->getSupplier()->isRCA()) {
                        $foundRCA = true;
                        break;
                    }
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
