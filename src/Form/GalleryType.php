<?php

namespace App\Form;

use App\Entity\Gallery;
use App\Entity\Picture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class GalleryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "label" => "Nom de la galerie",
                "required" => false,
                "attr" => [
                    "class" => "form-control",
                ]
            ])
            ->add('isVisible', ChoiceType::class, [
                "label" => "La galerie est-elle visible pour le public ?",
                "choices" => [
                    'Oui' => true,
                    'Non' => false,
                ],
                "attr" => [
                    "class" => "label-radio",
                ],
                "expanded" => true
            ])
            ->add('description', TextareaType::class, [
                "label" => "Description",
                "required" => false,
                "attr" => [
                    "class" => "form-control",
                    "rows" => 3
                ]
            ])
            ->add('pictures', FileType::class, [
                'label' => 'Ajoutez une ou plusieurs nouvelle(s) image(s)',
                'multiple' => true,
                'required' =>false,
                'mapped' => false
            ])
            ->add('savedPictures', EntityType::class,[
                'label' => 'Choisissez parmi les images enregistrées',
                'mapped' => false,
                'required' => false,
                'multiple' => true,
                'expanded' => false,
                'class' => Picture::class,
                'choice_label' => function($picture){                 
                    return $picture->getTitle()." (".$picture->getPictureFile().")" ;
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gallery::class,
        ]);
    }
}
