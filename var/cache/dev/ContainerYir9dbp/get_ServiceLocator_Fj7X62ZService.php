<?php

namespace ContainerYir9dbp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fj7X62ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fj7X62Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fj7X62Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carouselPictureRepository' => ['privates', 'App\\Repository\\CarouselPictureRepository', 'getCarouselPictureRepositoryService', true],
            'carouselRepository' => ['privates', 'App\\Repository\\CarouselRepository', 'getCarouselRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'pictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', true],
        ], [
            'carouselPictureRepository' => 'App\\Repository\\CarouselPictureRepository',
            'carouselRepository' => 'App\\Repository\\CarouselRepository',
            'entityManager' => '?',
            'pictureRepository' => 'App\\Repository\\PictureRepository',
        ]);
    }
}