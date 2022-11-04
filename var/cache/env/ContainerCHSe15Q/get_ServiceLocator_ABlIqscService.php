<?php

namespace ContainerCHSe15Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ABlIqscService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.ABlIqsc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ABlIqsc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.ABlIqsc.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.ABlIqsc": it references class "App\\Entity\\Article" but no such service exists.'],
            'carouselRepository' => ['privates', 'App\\Repository\\CarouselRepository', 'getCarouselRepositoryService', true],
        ], [
            'article' => 'App\\Entity\\Article',
            'carouselRepository' => 'App\\Repository\\CarouselRepository',
        ]);
    }
}
