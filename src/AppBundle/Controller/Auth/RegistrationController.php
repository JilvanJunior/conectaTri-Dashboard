<?php

namespace AppBundle\Controller\Auth;

use AppBundle\Form\RepresentativeUserType;
use AppBundle\Entity\RepresentativeUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;

class RegistrationController extends Controller
{
    /**
     * @Route("/cadastro/representante", name="representative_user_registration")
     * @param Request $request
     * @return
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

            return $this->redirectToRoute('login');
        }

        return $this->render(
            'Representative/register.html.twig',
            array('form' => $form->createView())
        );
    }
}