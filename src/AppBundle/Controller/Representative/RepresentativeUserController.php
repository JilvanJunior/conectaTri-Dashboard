<?php

namespace AppBundle\Controller\Representative;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RepresentativeUserController extends Controller
{
    /**
     * @Route("/representante/cotacao/{id}", name="quote_representative")
     */
    public function indexAction(Request $request, $id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $quote = $em->getRepository('AppBundle:Quote')->getQuoteByRepresentative($user->getEmail(), $id);
        if($quote == null)
            return $this->redirectToRoute('access_denied');

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
