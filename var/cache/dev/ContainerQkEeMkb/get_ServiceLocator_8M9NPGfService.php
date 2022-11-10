<?php

namespace ContainerQkEeMkb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8M9NPGfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8M9NPGf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8M9NPGf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', true],
        ], [
            'pictureRepository' => 'App\\Repository\\PictureRepository',
        ]);
    }
}
