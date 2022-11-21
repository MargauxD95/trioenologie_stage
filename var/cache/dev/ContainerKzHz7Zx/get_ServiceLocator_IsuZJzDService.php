<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IsuZJzDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.isuZJzD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.isuZJzD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'picture' => ['privates', '.errored..service_locator.isuZJzD.App\\Entity\\Picture', NULL, 'Cannot autowire service ".service_locator.isuZJzD": it references class "App\\Entity\\Picture" but no such service exists.'],
            'pictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', true],
        ], [
            'picture' => 'App\\Entity\\Picture',
            'pictureRepository' => 'App\\Repository\\PictureRepository',
        ]);
    }
}
