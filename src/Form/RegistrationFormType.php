<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                "attr" => [
                    "class" => "form-control mt-1"
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => "J'accepte les conditions d'utilisations ",
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Avant de continuer vous devez accepter les conditions d\'utilisation.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                "type" => PasswordType::class,
                'options' => [
                    'attr' => [
                        "class" => 'form-control mt-1 mb-4'
                    ],
                ],
                "first_options" => [
                    'attr' => [
                    'placeholder' => 'Mot de passe']
                ],
                "second_options" => [                    
                    'attr' => [
                    'placeholder' => 'Confirmation du mot de passe']
                ],
                'invalid_message' => "Les deux champs doivent correspondre !",
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Confirmez votre mot de passe',
                    ]),
                    new Regex([
                        'pattern' => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$/",
                        'message' => 'Votre mot de passe doit contenir au moins 1 lettre majuscule, 1 lettre minuscule et 1 chiffre.',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caract??res',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
