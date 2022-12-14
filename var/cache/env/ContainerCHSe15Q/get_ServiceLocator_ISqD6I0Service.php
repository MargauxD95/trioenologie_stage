<?php

namespace ContainerCHSe15Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ISqD6I0Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.ISqD6I0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ISqD6I0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profileRepository' => ['privates', 'App\\Repository\\ProfileRepository', 'getProfileRepositoryService', true],
        ], [
            'profileRepository' => 'App\\Repository\\ProfileRepository',
        ]);
    }
}
