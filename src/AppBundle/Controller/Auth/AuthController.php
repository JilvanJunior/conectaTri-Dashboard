<?php

namespace AppBundle\Controller\Auth;

use AppBundle\Utils\Utils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

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
     * @Route("/verificar/{data}", name="verify-email")
     */
    public function verifyEmailAction($data) {
        $d = $this->getDoctrine();
        $em = $d->getManager();
        $objData = json_decode(gzuncompress(Utils::base64url_decode($data)));
        $newData = [
            "h" => $objData->h,
            "j" => $objData->j,
            "p" => $objData->p
        ];
        $rcvdHash = $objData->t;
        $calcHash = hash_hmac("sha512", json_encode($newData), $this->getParameter("internal_key"));
        $dbRetailer = $d->getRepository("AppBundle:Retailer")->find($objData->h);
        if ($dbRetailer == null || $dbRetailer->isVerified() || $rcvdHash != $calcHash || $dbRetailer->getEmail() != $objData->p) {
            return $this->redirectToRoute("access_denied");
        }
        $dbRetailer->setVerified(true);
        $em->flush();
        return $this->render("security/verified_email.html.twig", array());
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
