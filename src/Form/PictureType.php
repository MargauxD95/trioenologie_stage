<?php

namespace App\Form;

use App\Entity\Picture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\All;

class PictureType extends AbstractType
{
     
    public function buildForm(FormBuilderInterface $builder, array $options, ): void        
    {
        
# -------Création Upload Multiple 

        // en création Plusieurs images on ne montre que le champ d'upload multiple
        if($options['addMulti'])
        {
            $builder
                ->add('pictureFile', FileType::class,[
                    "label" => "Sélectionnez les images à télécharger",
                    'required'=>false,
                    'multiple'=>true,
                    'mapped' => false,
                    'attr' => [
                        'class'=>'form-control'
                    ],
                    'constraints' =>[
                        new All([
                            new Image([
                                'maxSize' => '2M',
                                'mimeTypes' => [
                                    'image/jpeg',
                                    'image/png',
                                    'image/gif',
                                    'image/bmp',

                                ],
                                'mimeTypesMessage'=> 'Vous ne pouvez charger que des images au format jpg, jpeg, png, gif ou bmp !'
                            ])
                        ])
                    ]
                ])
                ;
        }


# ------- Création Upload Simple 

        // en création Une image on ne montre un champ d'upload simple et les champs éditables
        if($options['addOne'])
        {
            $builder
            ->add('name', TextType::class, [
                'required' => true, 
                "label" => "Nom de l'image",
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('altText', TextType::class, [
                "label" => "Balise Alt",
                "required" => false,
                "help" => "Une description de ce que représente l'image",
                "attr" => [
                    "class" => "form-control"
                ]
            ]) 
            ->add('legend', TextareaType::class, [
                "label" => "Légende",
                "required" => false,
                "attr" => [
                    "class" => "form-control",
                    'rows' => 2,
                ]
            ]) 
                ->add('pictureFile', FileType::class,[
                    "label" => "Sélectionnez l'image à télécharger",
                    'required'=>false,
                    'multiple'=>false,
                    'mapped' => false,
                    'attr' => [
                        'class'=>'form-control'
                    ],
                    'constraints' =>[
                        new Image([
                            'maxSize' => '2M',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/gif',
                                'image/bmp',

                            ],
                            'mimeTypesMessage'=> 'Vous ne pouvez charger qu\'une image au format jpg, jpeg, png, gif ou bmp !'
                        ])
                    ]
                                       
                ])
                ;
        }


# ------- Edition 

        // en édition on ne montre que les champs éditable (name, altText, legend)
        if($options['edit'])
        {
           $builder

            ->add('name', TextType::class, [
                'required' => true, 
                "label" => "Nom de l'image",
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('altText', TextType::class, [
                "label" => "Balise ALT",
                "required" => false,
                "help" => "Une description de ce que représente l'image",
                "attr" => [
                    "class" => "form-control"
                ]
            ]) 
            ->add('legend', TextareaType::class, [
                "label" => "Légende",
                "required" => false,
                "attr" => [
                    "class" => "form-control",
                    'rows' => 2,
                ]
            ]) 
            ;
        }
    }
        

    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Picture::class,
            'addMulti' => false,
            'addOne' => false,
            'edit' => false
        ]);
    }
}
