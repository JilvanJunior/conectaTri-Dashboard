<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteProduct;
use AppBundle\Entity\QuoteSupplier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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
    public function addRemoteAction(Request $request)
    {
        if($request->getMethod() == "POST"){

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();

            $quote = new Quote();
            $quote->setName($request->get('name'));
            $quote->setClosed(false);
            $quote->setType(1);
            $quote->setRetailer($user);
            $beginsAt = date_create_from_format('d/m/Y h:m:s', $request->get('begins-at'));
            $quote->setBeginsAt($beginsAt);
            $expiresAt = date_create_from_format('d/m/Y h:m:s', $request->get('expires-at'));
            $quote->setExpiresAt($expiresAt);

            $em->persist($quote);

            $em->flush();

            return $this->redirectToRoute('cotacao_listas', ['id' => $quote->getId()]);
        }

        return $this->render('Retailer/pricelist/addPriceList.html.twig', [
        ]);
    }

    /**
     * @Route("/varejista/cotacao/presencial/nova", name="nova_cotacao_presencial")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addPresentialAction(Request $request)
    {
        if($request->getMethod() == "POST"){

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();

            $quote = new Quote();
            $quote->setName($request->get('name'));
            $quote->setClosed(false);
            $quote->setType(2);
            $quote->setRetailer($user);
            $beginsAt = date_create_from_format('d/m/Y h:m:s', $request->get('begins-at'));
            $quote->setBeginsAt($beginsAt);
            $expiresAt = date_create_from_format('d/m/Y h:m:s', $request->get('expires-at'));
            $quote->setExpiresAt($expiresAt);

            $em->persist($quote);

            $em->flush();

            return $this->redirectToRoute('cotacao_listas', ['id' => $quote->getId()]);
        }

        return $this->render('Retailer/pricelist/addPriceList.html.twig', [
        ]);
    }

    /**
     * @Route("/varejista/cotacao/{id}/listas", name="cotacao_listas")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addListAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->find($id);

        $listings = $em->getRepository('AppBundle:Listing')->findBy(['retailer' => $user, 'deleted' => false]);

        //type of listings
        $types = [];
        $types['0'] = 'Não Informado';
        $types['1'] = 'Comum';
        $types['2'] = 'Sazonal';
        $types['3'] = 'Semanal';

        if($request->getMethod() == "POST"){

            $listingIds = $request->get('listings');

            $products = $em->getRepository('AppBundle:ListingProduct')->findProductsByListings(implode(',', $listingIds));

            //add products to quoteProduct
            foreach ($products as $product) {

                $quoteProduct = new QuoteProduct();
                /** @var Quote $quote */
                $quoteProduct->setQuote($quote);
                $quoteProduct->setProduct($product);

                $em->persist($quoteProduct);

                $em->flush();
            }

            $data['url'] = $this->generateUrl('cotacao_produtos', ['id' => $id]);
            echo json_encode($data);
            exit();
        }

        return $this->render('Retailer/pricelist/addListings.html.twig', [
            'quote' => $quote,
            'listings' => $listings,
            'types' => $types,
        ]);
    }

    /**
     * @Route("/varejista/cotacao/{id}/produtos", name="cotacao_produtos")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addProductsAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->find($id);

        $products = $em->getRepository('AppBundle:Product')->findBy(['retailer' => $user, 'deleted' => false]);

        $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $id, 'deleted' => false]);

        if($request->getMethod() == "POST"){

            $productsIds = $request->get('products');

            //remove not added quoteProducts
            $em->getRepository('AppBundle:QuoteProduct')->removeExcludedQuoteProducts($id, implode(',', $productsIds));

            //add new quoteProducts
            foreach ($productsIds as $productsId) {
                $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $id, 'product' => $productsId]);

                if($quoteProduct == null) {
                    $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $productsId, 'deleted' => false]);

                    $quoteProduct = new QuoteProduct();
                    /** @var Quote $quote */
                    $quoteProduct->setQuote($quote);
                    /** @var Product $product */
                    $quoteProduct->setProduct($product);

                    $em->persist($quoteProduct);
                    $em->flush();
                }

            }

            $data['url'] = $this->generateUrl('cotacao_fornecedores', ['id' => $id]);
            echo json_encode($data);
            exit();
        }

        return $this->render('Retailer/pricelist/addProducts.html.twig', [
            'quote' => $quote,
            'quoteProducts' => $quoteProducts,
            'products' => $products,
        ]);
    }

    /**
     * @Route("/varejista/cotacao/{id}/fornecedores", name="cotacao_fornecedores")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addSuppliersAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->find($id);

        $suppliers = $em->getRepository('AppBundle:Supplier')->findBy(['retailer' => $user, 'deleted' => false]);

        if($request->getMethod() == "POST"){

            $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $id, 'deleted' => false]);
            $representativesIds = $request->get('suppliers');

            //add new quoteSuppliers
            foreach ($representativesIds as $representativesId) {

                $representative = $em->getRepository('AppBundle:Representative')->find($representativesId);

                foreach ($quoteProducts as $quoteProduct) {

                    $quoteSupplier = new QuoteSupplier();
                    $quoteSupplier->setQuoteProduct($quoteProduct);
                    $quoteSupplier->setRepresentative($representative);
                    $quoteSupplier->setPrice(0);
                    $quoteSupplier->setQuantity(1);

                    $em->persist($quoteSupplier);
                    $em->flush();
                }

                if($quote->getType() == 1){
                    //send mail to representative
                    $link = $this->generateUrl('quote_representative', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);
                    $message = new \Swift_Message(
                        'Cotação no ConectaTri',
                        "<b>".$user->getFantasyName()."</b> lhe enviou um pedido de cotação no ConectaTri.
                            <br><br>Para preencher esta cotação, clique <a href='$link'>aqui</a> ou acesse: $link
                            <br><br>Caso este e-mail tenha sido enviado por acidente, pedimos que o desconsidere.
                            <br><br>Obrigado",
                        "text/html",
                        "utf-8"
                    );
                    $message->setFrom(["noreply@conectatri.com.br" => "ConectaTri"]);
                    $message->setTo([$representative->getEmail() => $representative->getName()]);

                    $mailer = $this->get('swiftmailer.mailer.default');
                    $mailer->send($message);
                }
            }

            $data['url'] = $this->generateUrl('cotacoes');
            echo json_encode($data);
            exit();
        }

        return $this->render('Retailer/pricelist/addSuppliers.html.twig', [
            'quote' => $quote,
            'suppliers' => $suppliers,
        ]);
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
     * @Route("/varejista/cotacao/{id}/acompanhar", name="acompanhar_cotacao")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->findOneBy(['id' => $id]);

        return $this->render('Retailer/pricelist/show.html.twig', [
            'quote' => $quote,
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
        $em = $this->getDoctrine()->getManager();

        $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($id);
        $quote = $quoteProduct->getQuote();

        if($quote->getType() == 2)
            return $this->redirectToRoute('editar_cotacao_produto', ['id' => $id]);

        return $this->render('Retailer/pricelist/showQuoteProduct.html.twig', [
            'quoteProduct' => $quoteProduct,
            'quote' => $quote,
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
        $em = $this->getDoctrine()->getManager();

        $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($id);
        $quote = $quoteProduct->getQuote();

        if($quote->getType() == 1)
            return $this->redirectToRoute('acompanhar_cotacao_produto', ['id' => $id]);

        return $this->render('Retailer/pricelist/editQuoteProduct.html.twig', [
            'quoteProduct' => $quoteProduct,
            'quote' => $quote,
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
