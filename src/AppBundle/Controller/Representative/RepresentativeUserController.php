<?php

namespace AppBundle\Controller\Representative;

use AppBundle\Entity\QuoteSupplier;
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

        $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $quote]);

        return $this->render('Representative/quote.html.twig', array(
            'quote' => $quote[0],
            'quoteProducts' => $quoteProducts,
            'representative' => $representative[0],
            'email' => $user->getEmail(),
        ));
    }

    /**
     * @Route("/representante/cotacao/{id}/{email}/data", name="quote_representative_data")
     * @param Request $request
     * @param $id
     */
    public function quoteDataAction(Request $request, $id, $email)
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->getQuoteByRepresentative($email, $id);
        $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $quote]);

        $representative = $em->getRepository('AppBundle:Representative')
            ->getRepresentativeByQuote($email, $id);

        if($request->getMethod() == "POST"){

            $data = $request->get('data');
            foreach ($data as $k => $item){
                $quoteSupplier = $em->getRepository('AppBundle:QuoteSupplier')->findOneBy(
                    ['quoteProduct' => $k, 'representative' => $representative[0], 'deleted' => false]);

                //check if exists
                if($quoteSupplier == null){
                    $quoteProduct = $em->getRepository('AppBundle:QuoteProduct')->find($k);

                    $quoteSupplier = new QuoteSupplier();
                    $quoteSupplier->setQuoteProduct($quoteProduct);
                    $quoteSupplier->setRepresentative($representative[0]);
                } else{
                    $quoteSupplier->setUpdatedAt(new \DateTime());
                }

                $price = str_replace(".","", $item['price']);
                $price = str_replace(",",".", $price);

                $quoteSupplier->setPrice($price);
                $quoteSupplier->setQuantity($item['quantity']);
                $quoteSupplier->setFilledIn(true);

                $em->persist($quoteSupplier);
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
            $tmp['quantity_unit'] = $product->getQuantity() . ' ' . $product->getUnit();
            $quoteSuppliers = $quoteProduct->getQuoteSuppliers();
            $tmp['price'] = '';
            $tmp['quantity'] = '';
            foreach ($quoteSuppliers as $quoteSupplier) {
                if (!$quoteSupplier->getDeleted() && $quoteSupplier->getRepresentative()->getId() == $representative[0]->getId()) {
                    $tmp['price'] = number_format($quoteSupplier->getPrice(), 2, ',', '.');
                    $tmp['quantity'] = $quoteSupplier->getQuantity();
                }
            }
            $data['data'][] = $tmp;
        }

        echo json_encode($data);
        exit();
    }

}
