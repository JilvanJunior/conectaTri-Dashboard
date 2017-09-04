<?php

namespace AppBundle\Controller\Auth;

use AppBundle\Form\RepresentativeUserType;
use AppBundle\Form\RetailerType;
use AppBundle\Entity\RepresentativeUser;
use AppBundle\Entity\Retailer;
use AppBundle\Utils\Utils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\EntityManagerInterface;

class RegistrationController extends Controller
{
    /**
     * @Route("/cadastro/representante", name="representative_user_registration")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        // build the form
        $user = new RepresentativeUser();
        $form = $this->createForm(RepresentativeUserType::class, $user);

        // handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // encode the password
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // save the RepresentativeUser
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('login') . "?fornecedor=1");

        }

        return $this->render(
            'Representative/register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/cadastro/varejista", name="retailer_user_registration")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function retailerRegisterAction(Request $request)
    {
        // build the form
        $user = new Retailer();
        $form = $this->createForm(RetailerType::class, $user);

        // handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();

            $dbRetailer = $doctrine->getRepository("AppBundle:Retailer")->findOneBy(["cnpj" => $user->getCnpj()]);
            if (!is_null($dbRetailer)) {
                if (!$dbRetailer->isVerified() || $dbRetailer->isDeleted()) {
                    $dbRetailer
                        ->setCnpj($dbRetailer->getCnpj() . uniqid("_", true))
                        ->setDeleted(true)
                        ->setVerified(false);
                    $em->flush();
                } else {
                    $form->addError(new FormError('Este CNPJ já está cadastrado.'));
                    return $this->render(
                        'Retailer/register.html.twig',
                        array('form' => $form->createView())
                    );
                }
            }
            // encode the password
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password)
                ->setRoles("ROLE_USER");

            // save the Retailer
            $em->persist($user);
            try {
                $em->flush();
            } catch(\Exception $e) {
                $form->addError(new FormError('Houve um erro no cadastro. Por favor, tente novamente.'));
                return $this->render(
                    'Retailer/register.html.twig',
                    array('form' => $form->createView())
                );
            }

            $data = [
                "h" => $user->getId(),
                "j" => (new \DateTime())->getTimestamp(),
                "p" => $user->getEmail()
            ];
            $data['t'] = hash_hmac("sha512", json_encode($data), $this->getParameter('internal_key'));
            $encoded = Utils::base64url_encode(gzcompress(json_encode($data), 2));
            $link = $this->get('router')->generate("verify-email", ["data" => $encoded], UrlGeneratorInterface::ABSOLUTE_URL);
            $mailer = $this->get('swiftmailer.mailer.default');
            $message = (new \Swift_Message('Verificação de E-mail - Conecta Tri'))
                ->setFrom('noreply@conectatri.com.br')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        'email/confirm_email.html.twig',
                        array('link' => $link)
                    ),
                    'text/html'
                );

            $result = $mailer->send($message);

            if ($result > 0) {
                $this->addFlash(
                    'message',
                    "Cadastro efetuado com sucesso. Foi enviado um link de ativação no e-mail cadastrado."
                );
            } else {
                $this->addFlash(
                    'message',
                    "Usuário cadastrado com sucesso, porém houve um problema ao tentar enviar o e-mail de verificação."
                );
            }

            return $this->redirect($this->generateUrl('login') . "?varejista=1");
        }

        return $this->render(
            'Retailer/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
