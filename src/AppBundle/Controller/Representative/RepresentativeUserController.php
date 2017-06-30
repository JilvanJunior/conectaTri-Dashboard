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
     * @return
     */
    public function indexAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->getQuoteByRepresentative($user->getEmail(), $id);
        $now = new \DateTime();
        if($quote == null || $now > $quote[0]->getExpiresAt())
            return $this->redirectToRoute('access_denied');

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

                $quoteSupplier->setPrice($item['price']);
                $quoteSupplier->setQuantity($item['quantity']);

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
                    $tmp['price'] = $quoteSupplier->getPrice();
                    $tmp['quantity'] = $quoteSupplier->getQuantity();
                }
            }
            $data['data'][] = $tmp;
        }

        echo json_encode($data);
        exit();
    }

}
