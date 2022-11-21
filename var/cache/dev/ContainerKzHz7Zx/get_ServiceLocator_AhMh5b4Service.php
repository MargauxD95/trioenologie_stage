<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AhMh5b4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ahMh5b4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ahMh5b4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profile' => ['privates', '.errored..service_locator.ahMh5b4.App\\Entity\\Profile', NULL, 'Cannot autowire service ".service_locator.ahMh5b4": it references class "App\\Entity\\Profile" but no such service exists.'],
            'profileRepository' => ['privates', 'App\\Repository\\ProfileRepository', 'getProfileRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'profile' => 'App\\Entity\\Profile',
            'profileRepository' => 'App\\Repository\\ProfileRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
