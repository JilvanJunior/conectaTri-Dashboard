<?php

namespace AppBundle\Controller\Retailer;

use AppBundle\Entity\Product;
use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteProduct;
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

            return $this->redirectToRoute('cotacao_remota_listas', ['id' => $quote->getId()]);
        }

        return $this->render('Retailer/pricelist/addPriceList.html.twig', [
        ]);
    }

    /**
     * @Route("/varejista/cotacao/remota/{id}/listas", name="cotacao_remota_listas")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addRemoteListAction(Request $request, $id)
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

            $data['url'] = $this->generateUrl('cotacao_remota_produtos', ['id' => $id]);
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
     * @Route("/varejista/cotacao/remota/{id}/produtos", name="cotacao_remota_produtos")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addRemoteProductsAction(Request $request, $id)
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

            $data['url'] = $this->generateUrl('cotacoes');
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
