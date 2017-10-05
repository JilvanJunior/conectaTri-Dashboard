<?php

namespace AppBundle\Controller\TermsAndCondition;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Process\Process;

class TermsController extends Controller
{
    /**
     *
     * @Route("/termosdeuso", name="termsandcondition")
     */
    public function indexAction(Request $request)
    {
        // set default timezone
        date_default_timezone_set('	Brazil/East'); // CDT
        $current_date = date('d/m/Y == H:i:s');

        return $this->render('views/TermsAndConditions/index.html.twig', ['current_date' => $current_date]);
    }
}
