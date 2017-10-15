<?php

namespace AppBundle\Controller\Representative;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductSupplierStatusController extends Controller {
    /**
     * @Route("/representante/cotacao", name="representative_quotes")
     */
    public function showQuotesAction(Request $request)
    {
        /** @var RepresentativeUser $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quotes = $em->getRepository('AppBundle:Quote')->getAllQuotesFromRepresentative($user->getEmail());

        //quote status
        $status['0'] = "Em Andamento";
        $status['1'] = "Encerrada";

        return $this->render('Representative/quote/index.html.twig', [
            'quotes' => $quotes,
            'status' => $status,
        ]);
    }

    /**
     * @Route("/representante/cotacao/{id}/update", name="quote_representative_observation")
     */
    public function updateProductSupplierStatus(Request $request, $id)
    {
        /** @var RepresentativeUser $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('AppBundle:Quote')->getQuoteByRepresentative($user->getEmail(), $id);
        if($quote == null)
            return $this->json(array('status' => 'error', 'message' => 'Acesso negado'));

        $representative = $em->getRepository('AppBundle:Representative')
            ->getRepresentativeByQuote($user->getEmail(), $id);
        if($representative == null)
            return $this->json(array('status' => 'error', 'message' => 'Acesso negado'));

        $quoteSupplierStatus = $em->getRepository('AppBundle:QuoteSupplierStatus')
            ->findOneBy(['quote' => $quote, 'representative' => $representative]);
        if($quoteSupplierStatus == null)
            return $this->json(array('status' => 'error', 'message' => 'Acesso negado'));

        $quoteSupplierStatus->setObservation($request->get('observation'));

        try {
            $em->flush();
        } catch(Exception $e) {
            return $this->json(array('status' => 'error', 'message' => $e->getMessage()));
        }

        return $this->json(array('status' => 'ok', 'message' => 'Observação atualizada com sucesso'));
    }
}
