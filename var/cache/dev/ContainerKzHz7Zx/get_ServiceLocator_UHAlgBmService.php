<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UHAlgBmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UHAlgBm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UHAlgBm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'picture' => ['privates', '.errored..service_locator.UHAlgBm.App\\Entity\\Picture', NULL, 'Cannot autowire service ".service_locator.UHAlgBm": it references class "App\\Entity\\Picture" but no such service exists.'],
        ], [
            'picture' => 'App\\Entity\\Picture',
        ]);
    }
}