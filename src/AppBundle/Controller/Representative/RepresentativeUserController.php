<?php

namespace AppBundle\Controller\Representative;

use AppBundle\Entity\Quote;
use AppBundle\Entity\QuoteProduct;
use AppBundle\Entity\QuoteSupplier;
use AppBundle\Entity\QuoteSupplierStatus;
use AppBundle\Entity\Representative;
use AppBundle\Entity\RepresentativeUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RepresentativeUserController extends Controller
{
    /**
     * @Route("/representante/cotacao/{id}", name="quote_representative")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $id)
    {
        /** @var RepresentativeUser $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->getQuoteByRepresentative($user->getEmail(), $id);
        if($quote == null)
            return $this->redirectToRoute('access_denied');
        $now = new \DateTime();
        if($now > $quote[0]->getExpiresAt() || $quote[0]->isClosed()) {
            if ($now > $quote[0]->getExpiresAt() && !$quote[0]->isClosed()) {
                $quote[0]->setClosed(true);
                $em->flush();
            }
            return $this->redirectToRoute('access_denied');
        }

        $isIncluded = false;

        foreach ($quote[0]->getQuoteProducts() as $quoteProduct) {
            foreach ($quoteProduct->getQuoteSuppliers() as $quoteSupplier) {
                /** @var QuoteSupplier $quoteSupplier */
                if ($quoteSupplier->getRepresentative()->getEmail() == $user->getEmail() && !$quoteSupplier->isDeleted()) {
                    $isIncluded = true;
                    break;
                }
            }
        }

        if (!$isIncluded) {
            return $this->redirectToRoute('access_denied');
        }

        $representative = $em->getRepository('AppBundle:Representative')
            ->getRepresentativeByQuote($user->getEmail(), $id);

        $isCompleted = false;
        $quoteSupplierStatus = $em->getRepository('AppBundle:QuoteSupplierStatus')
            ->findOneBy(['quote' => $quote, 'representative' => $representative]);

        if($quoteSupplierStatus != null && $quoteSupplierStatus->getStatus() == 2)
            $isCompleted = true;

        return $this->render('Representative/quote.html.twig', array(
            'quote' => $quote[0],
            'representative' => $representative[0],
            'isCompleted' => $isCompleted,
        ));
    }

    /**
     * @Route("/representante/cotacao/{quoteId}/{representativeId}/data", name="quote_representative_data")
     * @param Request $request
     * @param $quoteId
     * @param $representativeId
     */
    public function quoteDataAction(Request $request, $quoteId, $representativeId)
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->find($quoteId);
        $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $quote]);

        $representative = $em->getRepository('AppBundle:Representative')->find($representativeId);

        if($request->getMethod() == "POST"){

            $data = $request->get('data');
            foreach ($data as $k => $item){
                $quoteSupplier = $em->getRepository('AppBundle:QuoteSupplier')->findOneBy(
                    ['quoteProduct' => $k, 'representative' => $representative, 'deleted' => false]);

                //check if exists
                if($quoteSupplier == null){
                    $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($k);

                    $quoteSupplier = new QuoteSupplier();
                    /** @var QuoteProduct $quoteProduct */
                    $quoteSupplier->setQuoteProduct($quoteProduct);
                    $quoteSupplier->setRepresentative($representative);
                } else{
                    $quoteSupplier->setUpdatedAt(new \DateTime());
                }

                $price = $item['price'];
                if($price != "" && is_int($price)) {
                    $price = str_replace(".","", $item['price']);
                    $price = str_replace(",",".", $price);

                    $quoteSupplier->setPrice($price);
                }

                $quantity = $item['quantity'];
                if(is_int($quantity)) {
                    $quoteSupplier->setQuantity($quantity);
                }

                $quoteSupplier->setFilledIn(true);

                $em->persist($quoteSupplier);
            }

            /** @var QuoteSupplierStatus $quoteSupplierStatus */
            $quoteSupplierStatus = $em->getRepository('AppBundle:QuoteSupplierStatus')
                ->findOneBy(['quote' => $quote, 'representative' => $representative]);

            if($quoteSupplierStatus->getStatus() == 0) {
                $quoteSupplierStatus->setStatus(1);
                $em->persist($quoteSupplierStatus);
            }

            $em->flush();
        }

        foreach ($quoteProducts as $quoteProduct) {
            $tmp = [];
            $product = $quoteProduct->getProduct();
            $tmp['id'] = $quoteProduct->getId();
            $tmp['name'] = $product->getName();
            $tmp['brand'] = $product->getBrand();
            $tmp['description'] = $product->getFullDescription();
            $tmp['quantity_unit'] = $product->getUnit()  . ' ' . $product->getQuantity();
            $quoteSuppliers = $quoteProduct->getQuoteSuppliers();
            $tmp['price'] = '';
            $tmp['quantity'] = '';
            foreach ($quoteSuppliers as $quoteSupplier) {
                if (!$quoteSupplier->getDeleted() && $quoteSupplier->getRepresentative()->getId() == $representative->getId()) {

                    $price = $quoteSupplier->getPrice();

                    if($price > 0)
                        $tmp['price'] = number_format($price, 2, ',', '.');
                    $tmp['quantity'] = $quoteSupplier->getQuantity();
                }
            }
            $data['data'][] = $tmp;
        }

        echo json_encode($data);
        exit();
    }

    /**
     * @Route("/representante/cotacao/{quoteId}/{representativeId}/encerrar", name="end_quote_representative")
     * @param Request $request
     * @param $quoteId
     * @param $representativeId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function endQuoteAction(Request $request, $quoteId, $representativeId)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Quote $quote */
        $quote = $em->getRepository('AppBundle:Quote')->find($quoteId);

        /** @var Representative $representative */
        $representative = $em->getRepository('AppBundle:Representative')->find($representativeId);

        if($quote == null || $representative == null){
            $data['url'] = $this->generateUrl('access_denied');
            echo json_encode($data);
            exit();
        }

        if($request->getMethod() == "POST"){

            /** @var QuoteSupplierStatus $quoteSupplierStatus */
            $quoteSupplierStatus = $em->getRepository('AppBundle:QuoteSupplierStatus')
                ->findOneBy(['quote' => $quote, 'representative' => $representative]);

            $quoteSupplierStatus->setStatus(2);
            $em->persist($quoteSupplierStatus);

            $em->flush();

            $data['url'] = $this->generateUrl('quote_representative', ['id' => $quote->getId()]);
            echo json_encode($data);
            exit();
        }

        return $this->redirectToRoute('access_denied');
    }

}
