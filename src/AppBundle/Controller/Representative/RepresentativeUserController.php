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
        if($quote == null)
            return $this->redirectToRoute('access_denied');

        if($request->getMethod() == "POST"){
            $representative = $em->getRepository('AppBundle:Representative')
                ->getRepresentativeByQuote($user->getEmail(), $id);
            $prices = $request->get('price');
            $quantities = $request->get('quantity');
            foreach ($prices as $k => $price){
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

                $quoteSupplier->setPrice($price);
                $quoteSupplier->setQuantity($quantities[$k]);

                $em->persist($quoteSupplier);
            }
            $em->flush();
        }

        $representative = $em->getRepository('AppBundle:Representative')
            ->getRepresentativeByQuote($user->getEmail(), $id);

        $quoteProducts = $em->getRepository('AppBundle:QuoteProduct')->findBy(['quote' => $quote]);

        return $this->render('Representative/quote.html.twig', array(
            'quote' => $quote[0],
            'quoteProducts' => $quoteProducts,
            'representative' => $representative[0],
        ));
    }
}
