<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FJZ9HService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator._F_JZ9H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._F_JZ9H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carousel' => ['privates', '.errored..service_locator._F_JZ9H.App\\Entity\\Carousel', NULL, 'Cannot autowire service ".service_locator._F_JZ9H": it references class "App\\Entity\\Carousel" but no such service exists.'],
            'carouselRepository' => ['privates', 'App\\Repository\\CarouselRepository', 'getCarouselRepositoryService', true],
        ], [
            'carousel' => 'App\\Entity\\Carousel',
            'carouselRepository' => 'App\\Repository\\CarouselRepository',
        ]);
    }
}
