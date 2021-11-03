<?php

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $AuthenticationUtils)
    {
        // $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $errors = $AuthenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $AuthenticationUtils->getLastUsername();

        // $form = $this->createForm(LoginForm::class, [
        //     '_username' => $lastUsername,
        // ]);

        return $this->render(
            'default/login.html.twig',
            array(
                // last username entered by the user
                // 'form' => $form->createView(),
                'errors'         => $errors,
                'username' => $lastUsername
            )
        );
    }
}
