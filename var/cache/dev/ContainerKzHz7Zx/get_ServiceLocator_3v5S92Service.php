<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3v5S92Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3v5S9_2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3v5S9_2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'galleryRepository' => ['privates', 'App\\Repository\\GalleryRepository', 'getGalleryRepositoryService', true],
        ], [
            'galleryRepository' => 'App\\Repository\\GalleryRepository',
        ]);
    }
}
