<?php

namespace ContainerLCgmneX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1Wt5IVPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1Wt5IVP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1Wt5IVP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gallery' => ['privates', '.errored..service_locator.1Wt5IVP.App\\Entity\\Gallery', NULL, 'Cannot autowire service ".service_locator.1Wt5IVP": it references class "App\\Entity\\Gallery" but no such service exists.'],
            'galleryRepository' => ['privates', 'App\\Repository\\GalleryRepository', 'getGalleryRepositoryService', true],
        ], [
            'gallery' => 'App\\Entity\\Gallery',
            'galleryRepository' => 'App\\Repository\\GalleryRepository',
        ]);
    }
}
