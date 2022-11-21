<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RlB_Wc0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RlB.wc0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RlB.wc0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'galleryRepository' => ['privates', 'App\\Repository\\GalleryRepository', 'getGalleryRepositoryService', true],
        ], [
            'entityManager' => '?',
            'galleryRepository' => 'App\\Repository\\GalleryRepository',
        ]);
    }
}