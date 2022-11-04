<?php

namespace ContainerCHSe15Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BKrCQJkService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.bKrCQJk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bKrCQJk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carousel' => ['privates', '.errored..service_locator.bKrCQJk.App\\Entity\\Carousel', NULL, 'Cannot autowire service ".service_locator.bKrCQJk": it references class "App\\Entity\\Carousel" but no such service exists.'],
            'carouselPictureRepository' => ['privates', 'App\\Repository\\CarouselPictureRepository', 'getCarouselPictureRepositoryService', true],
            'carouselRepository' => ['privates', 'App\\Repository\\CarouselRepository', 'getCarouselRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'pictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', true],
        ], [
            'carousel' => 'App\\Entity\\Carousel',
            'carouselPictureRepository' => 'App\\Repository\\CarouselPictureRepository',
            'carouselRepository' => 'App\\Repository\\CarouselRepository',
            'entityManager' => '?',
            'pictureRepository' => 'App\\Repository\\PictureRepository',
        ]);
    }
}
