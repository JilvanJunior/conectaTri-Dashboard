<?php

namespace AppBundle\Controller\Representative;

use AppBundle\Entity\RepresentativeUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/representante/", name="representative_dashboard")
     */
    public function indexAction(Request $request)
    {
        /** @var RepresentativeUser $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quotes = $em->getRepository('AppBundle:Quote')->getAllQuotesFromRepresentative($user->getEmail());

        //quote status
        $status['0'] = "Em Andamento";
        $status['1'] = "Encerrada";

        return $this->render('Representative/dashboard/index.html.twig', [
            'quotes' => $quotes,
            'status' => $status,
        ]);
    }
}
