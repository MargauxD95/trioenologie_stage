<?php

namespace App\Form;

use App\Entity\Picture;
use App\Entity\Carousel;
use App\Entity\CarouselPicture;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;



class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('page', TextType::class, [
                "label" => "Page de destination",
                "attr" => [
                    "class" => "form-control"
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
            
            ->add('positions', CollectionType::class, [
                'entry_type' => PicturePositionType::class,
                'required' => false,
                'mapped' => false,
                'by_reference' => false,
                "label" => "Position dans le carousel",
            ]);
        ;

        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) use($options) {
            $carousel = $event->getData();
            $carouselPictures = $carousel->getCarouselPictures();

            $form = $event->getForm();
            $form->get('positions')->setData($carouselPictures);
        })
        ;
    }       
   

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
            'edit' => false,

        ]);
    }
}
