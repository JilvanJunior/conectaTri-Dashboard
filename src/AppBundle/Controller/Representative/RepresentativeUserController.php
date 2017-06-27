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
        $quote = $this->getDoctrine()->getRepository("AppBundle:Quote")->find($id);

        return $this->render('Representative/quote.html.twig', array('quote' => $quote));
    }
}
