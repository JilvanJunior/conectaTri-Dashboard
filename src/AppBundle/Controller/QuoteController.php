<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends Controller
{
    /**
     * @Route("/quote/{id}", name="quote-index")
     */
    public function indexAction(Request $request, $id)
    {
        $quote = $this->getDoctrine()->getRepository("AppBundle:Quote")->find($id);
        $jms = $this->get('jms_serializer');
        return $this->render(':Quote:quote_placeholder.html.twig', array('quote' => $jms->serialize($quote, 'json')));
    }
}
