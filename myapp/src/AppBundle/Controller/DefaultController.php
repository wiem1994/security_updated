<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/signup", name="signup")
     */
    // public function signUp(Request $request)
    // {
    //     $user = new User();
    //     $form = $this->createFormBuilder($user)
    //         ->add('email', TextType::class)
    //         ->add('password', PasswordType::class)
    //         ->add('roles', ChoiceType::class, [
    //             'choices' => ['Admin' => 'admin', 'User' => 'user'], 'multiple' => true,
    //             'expanded' => true
    //         ])
    //         ->add('sign up', SubmitType::class)
    //         ->getForm();
    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $email = $form['email']->getData();

    //         $password = $form['password']->getData();
    //         $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    //         $roles = $form['roles']->getData();

    //         $user->setEmail($email);
    //         $user->setPassword($hashedpwd);
    //         $user->setRoles($roles);

    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($user);
    //         $em->flush();
    //         $msg = "success";
    //         return new Response($msg);
    //     } else {
    //          $msg = 'error';
    //         return new Response($msg);
    //     }
}
