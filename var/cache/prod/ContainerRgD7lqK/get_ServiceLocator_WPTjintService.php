<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WPTjintService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.WPTjint' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WPTjint'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'statusRepository' => ['privates', 'App\\Repository\\StatusRepository', 'getStatusRepositoryService', true],
        ], [
            'statusRepository' => 'App\\Repository\\StatusRepository',
        ]);
    }
}
