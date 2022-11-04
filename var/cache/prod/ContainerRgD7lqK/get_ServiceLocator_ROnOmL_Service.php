<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ROnOmL_Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.rOnOmL.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rOnOmL.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profileRepository' => ['privates', 'App\\Repository\\ProfileRepository', 'getProfileRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'profileRepository' => 'App\\Repository\\ProfileRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
