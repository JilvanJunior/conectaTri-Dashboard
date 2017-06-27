<?php

namespace AppBundle\Controller\Auth;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return
     */
    public function indexAction(Request $request)
    {
        if(!$this->_isLoggedIn())
            return $this->redirectToRoute('login');

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
            return $this->redirectToRoute('admin_dashboard');

        if($this->get('security.authorization_checker')->isGranted('ROLE_REPRESENTATIVE'))
            return $this->redirectToRoute('quote_representative', array('id' => $request->get('id')));
    }

    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @return
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/acesso-negado", name="access_denied")
     * @param Request $request
     * @return
     */
    public function accessDeniedAction(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
            return $this->redirectToRoute('admin_dashboard');
        else
            return $this->render('security/403.html.twig', array());
    }

    private function _isLoggedIn(){
        return $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY');
    }
}
