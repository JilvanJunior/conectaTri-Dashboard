<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\ApiSession;
use AppBundle\Entity\Product;
use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteProduct;
use AppBundle\Entity\QuoteSupplier;
use AppBundle\Entity\QuoteSupplierStatus;
use AppBundle\Entity\Representative;
use AppBundle\Entity\Retailer;
use AppBundle\Service\MartinsConnector;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Ramsey\Uuid\Uuid;

class PriceListController extends Controller
{
    /**
     * @Route("/varejista/cotacoes", name="cotacoes")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        /** @var Retailer $user */
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
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/cotacao/nova", name="nova_cotacao_remota")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getRestApiToken(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $token = $this->getDoctrine()->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);

        //type of listings
        $listingTypes = [];
        $listingTypes['0'] = 'Não Informado';
        $listingTypes['1'] = 'Comum';
        $listingTypes['2'] = 'Sazonal';
        $listingTypes['3'] = 'Semanal';

        //quotes types
        $quoteTypes = [];
        $quoteTypes['1'] = "Remota";
        $quoteTypes['2'] = "Presencial";

        $data = [
            'prazoManual' => '',
            'quoteTypes' => $quoteTypes,
            'listingTypes' => $listingTypes,
            'listings' => $user->getListings(),
            'products' => $user->getProducts(),
            'suppliers' => $user->getSuppliers(),
            'username' => $user->getFantasyName(),
            'userid' => $user->getId(),
            'userIsRCA' => $user->isRCAVirtual(),
        ];

        if($user->isRCAVirtual()) {
            $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
            $acesso = $mc->login();
            $conditions = $acesso->Login->CondicoesPagamento->CondPgto;
            if(is_array($conditions)) {
                $conds = [];
                foreach($conditions as $condition) {
                    $conds[] = $condition->Descricao;
                }
                $conditions = $conds;
            } else {
                $conditions = [ $conditions->Descricao ];
            }
            $data['conditions'] = $conditions;
        }

        if (!is_null($token)) {
            $data['token'] = $token->getToken();
        } else {
            $d = $this->getDoctrine();
            $em = $d->getManager();
            /** @var Retailer $dbUser */
            $dbUser = $this->get('security.token_storage')->getToken()->getUser();
            $session = new ApiSession();
            $uuid = Uuid::uuid5(Uuid::uuid1(), $dbUser->getCnpj());
            $session->setToken($uuid->toString());
            $session->setRetailer($dbUser);
            $em->persist($session);
            $em->flush();
            $data['token'] = $token->getToken();
        }


        return $this->render('Retailer/pricelist/addPriceList.html.twig', $data);
    }


    /**
     * @Route("/varejista/cotacao/presencial/nova", name="nova_cotacao_presencial")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addPresentialAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        if($request->getMethod() == "POST"){
            $em = $this->getDoctrine()->getManager();

            $quote = new Quote();
            $quote->setName($request->get('name'));
            $quote->setClosed(false);
            $quote->setType(2);
            $quote->setRetailer($user);
            $beginsAt = date_create_from_format('d/m/Y H:i', $request->get('begins-at'));
            $quote->setBeginsAt($beginsAt);
            $expiresAt = date_create_from_format('d/m/Y H:i', $request->get('expires-at'));
            $quote->setExpiresAt($expiresAt);
            if($request->get('payment-date')) {
                $paymentDate = date_create_from_format('d/m/Y H:i', $request->get('payment-date'));
                $quote->setExpiresAt($paymentDate);
            }

            $em->persist($quote);

            $em->flush();

            $this->addFlash(
                'info',
                'Selecione as listas de produtos para adicionar à cotação.'
            );

            return $this->redirectToRoute('cotacao_listas', ['id' => $quote->getId()]);
        }

        return $this->render('Retailer/pricelist/addPriceList.html.twig', [
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/cotacao/{id}/copiar", name="copiar_cotacao")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function copyAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->findOneBy(['id' => $id]);
        $newQuote = clone($quote);

        $tomorrow = (new \DateTime())->add(new \DateInterval('P1D'));
        $expireDate = $newQuote->getExpiresAt();
        
        $newQuote
            ->setIdOrder(0)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());

        if($expireDate < $tomorrow)
            $newQuote->setExpiresAt($tomorrow);
        else
            $newQuote->setExpiresAt($expireDate);

        $em->persist($newQuote);
        $em->flush();

        return $this->redirectToRoute('cotacoes');
    }

    /**
     * @Route("/varejista/cotacao/{id}/editar", name="editar_cotacao")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Retailer $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $token = $em->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);
        $quote = $em->getRepository('AppBundle:Quote')->findOneById($id);

        //type of listings
        $listingTypes = [];
        $listingTypes['0'] = 'Não Informado';
        $listingTypes['1'] = 'Comum';
        $listingTypes['2'] = 'Sazonal';
        $listingTypes['3'] = 'Semanal';

        //quotes types
        $quoteTypes = [];
        $quoteTypes['1'] = "Remota";
        $quoteTypes['2'] = "Presencial";

        $data = [
            'listingTypes' => $listingTypes,
            'listings' => $user->getListings(),
            'products' => $user->getProducts(),
            'quote' => $quote,
            'quoteTypes' => $quoteTypes,
            'suppliers' => $user->getSuppliers(),
            'username' => $user->getFantasyName(),
            'userid' => $user->getId(),
            'userIsRCA' => $user->isRCAVirtual(),
        ];

        if($user->isRCAVirtual()) {
            $mc = new MartinsConnector($this->getParameter('chave_martins'), $this->getParameter('url_martins'), $user);
            $acesso = $mc->login();
            $conditions = $acesso->Login->CondicoesPagamento->CondPgto;
            if(is_array($conditions)) {
                $conds = [];
                foreach($conditions as $condition) {
                    $conds[] = $condition->Descricao;
                }
                $conditions = $conds;
            } else {
                $conditions = [ $conditions->Descricao ];
            }
            $data['conditions'] = $conditions;
            $data['prazoManual'] = $quote->getPaymentDate();
            foreach($conditions as $condition) {
                if($data['prazoManual'] == trim($condition)) {
                    $data['prazoManual'] = '';
                    break;
                }
            }
        } else {
            $data['prazoManual'] = $quote->getPaymentDate();
        }

        if (!is_null($token)) {
            $data['token'] = $token->getToken();
        } else {
            $d = $this->getDoctrine();
            $em = $d->getManager();
            $dbUser = $d->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $this->get('security.token_storage')->getToken()->getUser()]);
            $session = new ApiSession();
            $uuid = Uuid::uuid5(Uuid::uuid1(), $dbUser->getCnpj());
            $session->setToken($uuid->toString());
            $session->setRetailer($dbUser);
            $em->persist($session);
            $em->flush();
            $data['token'] = $token->getToken();
        }

        return $this->render('Retailer/pricelist/addPriceList.html.twig', $data);
    }

    /**
     * @Route("/varejista/cotacao/{id}/acompanhar", name="acompanhar_cotacao")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $token = $em->getRepository('AppBundle:ApiSession')->findOneBy(['retailer' => $user->getId()]);
        $quote = $em->getRepository('AppBundle:Quote')->findOneBy(['id' => $id]);
        $data = [];

        $products = $quote->getQuoteProducts();
        foreach($products as $product) {
            foreach($product->getQuoteSuppliers() as $quoteSupplier) {
                if($quoteSupplier->isDeleted())
                    continue;

                $representative = $quoteSupplier->getRepresentative();
                $supplier = $representative->getSupplier();
                $idSupplier = $supplier->getId();

                if(!isset($data[$idSupplier])) {
                    $sum = $em->getRepository('AppBundle:QuoteSupplier')->getQuoteSupplierSum($quote, $supplier);
                    $quoteSupplierStatus = $em->getRepository('AppBundle:QuoteSupplierStatus')
                        ->findOneBy(['quote' => $quote, 'representative' => $representative]);

                    if(is_null($quoteSupplierStatus))
                        $observation = '';
                    else
                        $observation = $quoteSupplierStatus->getObservation();

                    if($quoteSupplier->isFilledIn()) {
                        $moreThanMinimum = ($supplier->getMinimumValue() <= $sum)?'Sim':'Não';
                        $filledIn = 'Preencheu a Cotação';
                    } else {
                        $moreThanMinimum = '-';
                        $filledIn = 'Pendente';
                    }

                    $status = array(
                        'representativeId' => $representative->getId(),
                        'representativeName' => $representative->getName(),
                        'supplierName' => $supplier->getName(),
                        'supplierIsRCA' => $supplier->isRCA(),
                        'moreThanMinimum' => $moreThanMinimum,
                        'countWins' => 0,
                        'total' => 0,
                        'filledIn' => $filledIn,
                        'observation' => $observation
                    );

                    $data[$idSupplier] = $status;
                }
            }
        }

        foreach($products as $product) {
            foreach($product->calculateWinners() as $quoteSupplier) {
                $supplier = $quoteSupplier->getRepresentative()->getSupplier();
                $idSupplier = $supplier->getId();

                $data[$idSupplier]['countWins']++;
                $data[$idSupplier]['total'] += $quoteSupplier->getPrice() * $quoteSupplier->getQuantity();
            }
        }

        return $this->render('Retailer/pricelist/show.html.twig', [
            'quote' => $quote,
            'supplierStatuses' => $data,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
            'token' => $token->getToken(),
        ]);
    }

    /**
     * @Route("/varejista/cotacao/acompanhar/produto/{id}", name="acompanhar_cotacao_produto")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showQuoteProductAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($id);
        $quote = $quoteProduct->getQuote();
        $prevPrev = $prev = $curr = null;
        foreach($quote->getQuoteProducts() as $quoteProduct) {
            $idQuoteProduct = $quoteProduct->getId();

            $prevPrev = $prev;
            $prev = $curr;
            $curr = $idQuoteProduct;

            if($prev == $id)
                break;
        }

        if($quote->getType() == 2)
            return $this->redirectToRoute('editar_cotacao_produto', ['id' => $id]);

        return $this->render('Retailer/pricelist/showQuoteProduct.html.twig', [
            'prev' => is_null($prevPrev)?0:$prevPrev,
            'next' => ($curr == $id)?0:$curr,
            'quoteProduct' => $quoteProduct,
            'quote' => $quote,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/cotacao/acompanhar/produto/{id}/editar", name="editar_cotacao_produto")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editQuoteProductAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($id);
        $quote = $quoteProduct->getQuote();
        $prevPrev = $prev = $curr = null;
        foreach($quote->getQuoteProducts() as $quoteProduct) {
            $idQuoteProduct = $quoteProduct->getId();

            $prevPrev = $prev;
            $prev = $curr;
            $curr = $idQuoteProduct;

            if($prev == $id)
                break;
        }

        if($quote->getType() == 1)
            return $this->redirectToRoute('acompanhar_cotacao_produto', ['id' => $id]);

        $this->addFlash(
            'info',
            'Edite os valores da cotação para cada fornecedor e clique em próximo.'
        );

        return $this->render('Retailer/pricelist/editQuoteProduct.html.twig', [
            'prev' => is_null($prevPrev)?0:$prevPrev,
            'next' => ($curr == $id)?0:$curr,
            'quoteProduct' => $quoteProduct,
            'quote' => $quote,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
        ]);
    }

    /**
     * @Route("/varejista/cotacao/acompanhar/produto/{id}/editar/data", name="editar_cotacao_produto_data")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editQuoteProductDataAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $quoteSuppliers = $em->getRepository('AppBundle:QuoteSupplier')->findBy(['quoteProduct' => $id]);
        $data = [];

        if($request->getMethod() == "POST"){

            $data = $request->get('data');
            foreach ($data as $k => $item){
                $quoteSupplier = $em->getRepository('AppBundle:QuoteSupplier')->findOneBy(['id' => $k]);

                $price = str_replace(".","", $item['price']);
                $price = str_replace(",",".", $price);

                $quoteSupplier->setPrice($price);
                $quoteSupplier->setQuantity($item['quantity']);
                $quoteSupplier->setFilledIn(true);
                $quoteSupplier->setUpdatedAt(new \DateTime());

                $em->persist($quoteSupplier);
            }
            $em->flush();
        }

        foreach ($quoteSuppliers as $quoteSupplier) {
            /** @var QuoteSupplier $quoteSupplier */
            $tmp['id'] = $quoteSupplier->getId();
            $tmp['supplier'] = $quoteSupplier->getRepresentative()->getSupplier()->getName();
            $tmp['representative'] = $quoteSupplier->getRepresentative()->getName();
            $tmp['price'] = number_format($quoteSupplier->getPrice(), 2, ',', '.');
            $tmp['quantity'] = $quoteSupplier->getQuantity();

            $data['data'][] = $tmp;
        }

        echo json_encode($data);
        exit();
    }

    /**
     * @Route("/varejista/cotacao/vencedor/produto/{id}", name="vencedor_cotacao_produto")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editWinnerQuoteProductAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($id);
        $quote = $quoteProduct->getQuote();

        if($request->getMethod() == "POST"){

            $quoteSuppliers = $em->getRepository('AppBundle:QuoteSupplier')->findBy(['quoteProduct' => $quoteProduct, 'deleted' => false]);

            foreach ($quoteSuppliers as $quoteSupplier) {
                $quoteProduct->removeWinner($quoteSupplier);
            }

            $quoteSupplierIds = $request->get('quoteSuppliers');

            //add new winnerQuoteProducts
            foreach ($quoteSupplierIds as $quoteSupplierId) {

                /** @var QuoteSupplier $product */
                $quoteSupplier = $em->getRepository('AppBundle:QuoteSupplier')->findOneBy(['id' => $quoteSupplierId, 'deleted' => false]);

                if($quoteSupplier != null) {
                    $quoteProduct->addWinner($quoteSupplier);
                }

            }

            $em->persist($quoteProduct);
            $em->flush();

            $this->addFlash(
                'success',
                'Vencedores salvos!'
            );

            $data['url'] = $this->generateUrl('vencedor_cotacao_produto', ['id' => $id]);
            echo json_encode($data);
            exit();
        }

        return $this->render('Retailer/pricelist/editWinnerQuoteProduct.html.twig', [
            'quoteProduct' => $quoteProduct,
            'quote' => $quote,
            'username' => $user->getFantasyName(),
            'userIsRCA' => $user->isRCAVirtual(),
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

        $this->addFlash(
            'success',
            'Cotação deletada!'
        );

        return $this->redirectToRoute('cotacoes');
    }

    /**
     * @Route("/varejista/cotacao/fornecedor/{idQuote}/{idRepresentative}/pdf", name="cotacao_fornecedor_pdf")
     * @param Request $request
     * @param $idQuote
     * @param $idRepresentative
     * @return Response
     * @internal param $id
     */
    public function quoteSupplierPdfAction(Request $request, $idQuote, $idRepresentative)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        /** @var Quote $quote */
        $quote = $em->getRepository('AppBundle:Quote')->find($idQuote);
        /** @var Representative $representative */
        $representative = $em->getRepository('AppBundle:Representative')->find($idRepresentative);
        $supplier = $representative->getSupplier();
        $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $idQuote, 'deleted' => false]);

        $quotesSupplier = array();

        /** @var QuoteProduct $quoteProduct */
        foreach($quoteProducts as $quoteProduct) {
            /** @var QuoteSupplier $quoteSupplier */
            foreach($quoteProduct->calculateWinners() as $quoteSupplier) {

                if($representative->getId() == $quoteSupplier->getRepresentative()->getId())
                    $quotesSupplier[] = $quoteSupplier;
            }
        }


        $html = $this->renderView('Retailer/pdf/quoteSupplier.html.twig', array(
            'quote' => $quote,
            'retailer' => $user,
            'representative' => $representative,
            'supplier' => $supplier,
            'quoteProducts' => $quoteProducts,
            'quotesSupplier' => $quotesSupplier
        ));

        $fileName = str_replace(" ", "_", $quote->getName())
            . "-" . str_replace(" ", "_", $supplier->getName());

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="'.$fileName.'.pdf"'
            )
        );
    }
}
