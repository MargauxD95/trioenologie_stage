<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VV92Q7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._VV92Q7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._VV92Q7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gallery' => ['privates', '.errored..service_locator._VV92Q7.App\\Entity\\Gallery', NULL, 'Cannot autowire service ".service_locator._VV92Q7": it references class "App\\Entity\\Gallery" but no such service exists.'],
        ], [
            'gallery' => 'App\\Entity\\Gallery',
        ]);
    }
}
