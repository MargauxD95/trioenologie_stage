<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, [
                'label' => "E-mail",
                "attr" => [
                    "class" => "form-control",
                ]
            ])
            ->add('subject',ChoiceType::class, [
                "choices" => [
                    "Visites" => "Visites",
                    "Cours" => "Cours",
                    "Dégustations" => "Dégustations",
                    "L'association" => "L'association",
                    "Autre" => "Autre"
                ],
                "multiple" => false,
                'label' => "Sujet",
                "attr" => [
                    "class" => "form-control",
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => "Votre message",
                'attr' => [
                    'rows' => 6,
                    'class' => 'form-control'
            ],
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
                'action_name' => 'contact',
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}