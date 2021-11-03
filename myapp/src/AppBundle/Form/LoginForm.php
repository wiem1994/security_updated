<?php

// namespace AppBundle\Form;

// use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\FormBuilderInterface;

// class LoginForm extends AbstractType
// {
//     public function buildForm(FormBuilderInterface $builder, array $options)
//     {

//         $builder
//             ->add('_username')
//             ->add('_password', PasswordType::class);
//     }
// }


namespace App\Form;

use App\DataTransferObject\Credentials;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LoginForm
 * @package App\Form
 */
class LoginForm extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class, [
                "label" => "Email :"
            ])
            ->add("password", PasswordType::class, [
                "label" => "Password :"
            ]);
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Credentials::class);
    }
}
