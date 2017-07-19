<?php

namespace AppBundle\Controller\Auth;

use AppBundle\Form\AppResettingFormType;
use AppBundle\Form\ResettingFormType;
use AppBundle\Utils\Utils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Controller managing the resetting of the password.
 */
class ResettingController extends Controller
{
    /**
     * Request reset user password: show form.
     * @Route("/recuperacao-senha", name="recover_password")
     */
    public function requestAction()
    {
        return $this->render('security/resetting.html.twig');
    }

    /**
     * Request reset user password: submit form and send email.
     *
     * @Route("/recuperacao-senha/email", name="recover_password_email")
     * @param Request $request
     *
     * @return Response
     */
    public function sendEmailAction(Request $request)
    {
        $username = $request->request->get('username');
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:RepresentativeUser')->findOneBy(array('email' => $username));

        if (null !== $user) {

            if (null === $user->getConfirmationToken()) {
                $user->setConfirmationToken($this->_generateToken());
            }

            $this->_sendResettingEmailMessage($user);
            $user->setPasswordRequestedAt(new \DateTime());
            $em->flush();

        }

        return new RedirectResponse($this->generateUrl('recover_password_check_email', array('username' => $username)));
    }

    /**
     * Tell the user to check his email provider.
     *
     * @Route("/recuperacao-senha/check-email", name="recover_password_check_email")
     * @param Request $request
     *
     * @return Response
     */
    public function checkEmailAction(Request $request)
    {
        $username = $request->query->get('username');

        if (empty($username)) {
            // the user does not come from the sendEmail action
            return new RedirectResponse($this->generateUrl('recover_password'));
        }
//
        return $this->render('security/check_email.html.twig', array(
            'tokenLifetime' => 2,
        ));
    }

    /**
     * Tell the user to check his email provider.
     *
     * @Route("/igor", name="igor")
     * @param Request $request
     *
     * @return Response
     */
    public function checkIgorAction(Request $request)
    {
//        $username = $request->query->get('username');
//
//        if (empty($username)) {
//            // the user does not come from the sendEmail action
//            return new RedirectResponse($this->generateUrl('recover_password'));
//        }
//
        return $this->render('security/check_email.html.twig', array(
            'tokenLifetime' => 2,
        ));
    }

    /**
     * Reset user password.
     *
     * @Route("/recuperacao-senha/token/{token}", name="recover_password_token")
     * @param Request $request
     * @param string  $token
     *
     * @return Response
     */
    public function resetAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:RepresentativeUser')->findOneBy(array('confirmationToken' => $token));

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with "confirmation token" does not exist for value "%s"', $token));
        }

        $form = $this->createForm(ResettingFormType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $url = $this->generateUrl('login');
            $response = new RedirectResponse($url);

            // encode the password
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // save the RepresentativeUser
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $response;
        }

        return $this->render('security/reset.html.twig', array(
            'token' => $token,
            'action' => "recover_password_token",
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/recovery/{token}", name="app_pass_recovery")
     * @param Request $request
     * @param string $token
     * @return Response
     */
    public function appPasswordReset(Request $request, $token) {

        $em = $this->getDoctrine()->getManager();
        $pe = $this->get("security.password_encoder");

        $data = json_decode(Utils::base64url_decode($token));
        $newData = [
            'i' => $data->i,
            'u' => $data->u,
            'j' => $data->j
        ];
        $user = $em->getRepository("AppBundle:Retailer")->find($data->i);
        $passHash = Utils::base64url_encode(hash_hmac("haval128,4", $user->getPassword(), $this->getParameter('internal_key'), true));
        $hash = $data->z;
        $cmpHash = Utils::base64url_encode(hash_hmac("sha256", json_encode($newData), $this->getParameter('internal_key'), true));

        $time = new \DateTime("-1 days");
        $dataTime = new \DateTime();
        $dataTime->setTimestamp($data->j);
        if ($user == null || $cmpHash != $hash || $dataTime < $time || $passHash != $data->u) {
            return $this->render('security/invalid_link.html.twig', array());
        }

        $form = $this->createForm(AppResettingFormType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $url = $this->generateUrl('login');
            $response = new RedirectResponse($url);

            // encode the password
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // save the Retailer
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $response;
        }

        return $this->render('security/reset.html.twig', array(
            'token' => $token,
            'action' => "app_pass_recovery",
            'form' => $form->createView(),
        ));
    }

    private function _generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    private function _sendResettingEmailMessage($user)
    {

        $url = $this->generateUrl('recover_password_token', array('token' => $user->getConfirmationToken()), UrlGeneratorInterface::ABSOLUTE_URL);

        $message = (new \Swift_Message('Recuperação de senha'))
            ->setFrom('noreply@conectatri.com.br')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView(
                    'email/password_resetting.html.twig',
                    array('user' => $user, 'confirmationUrl' => $url)
                ),
                'text/html'
            );

        $this->get('mailer')->send($message);
    }
}
