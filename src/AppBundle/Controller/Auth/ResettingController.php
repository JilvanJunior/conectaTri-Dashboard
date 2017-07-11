<?php

namespace AppBundle\Controller\Auth;

use AppBundle\Form\ResettingFormType;
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
            'form' => $form->createView(),
        ));
    }

    private function _generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    private function _sendResettingEmailMessage($user)
    {
        $template = "email/password_resetting.email.twig";

        $url = $this->generateUrl('recover_password_token', array('token' => $user->getConfirmationToken()), UrlGeneratorInterface::ABSOLUTE_URL);
        $rendered = $this->render($template, array(
            'user' => $user,
            'confirmationUrl' => $url,
        ));
        $this->_sendEmailMessage($rendered, "noreply@conectatri.com.br", (string) $user->getEmail());
    }

    /**
     * @param string       $renderedTemplate
     * @param array|string $fromEmail
     * @param array|string $toEmail
     */
    private function _sendEmailMessage($renderedTemplate, $fromEmail, $toEmail)
    {
        // Render the email, use the first line as the subject, and the rest as the body
        $renderedLines = explode("\n", trim($renderedTemplate));
        $subject = "Recuperação de Senha";
        $body = implode("\n", $renderedLines);

        $message = (new \Swift_Message())
            ->setSubject($subject)
            ->setFrom($fromEmail)
            ->setTo($toEmail)
            ->setBody($body);

        $this->get('mailer')->send($message);
    }
}
