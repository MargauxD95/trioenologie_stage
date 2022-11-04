<?php

namespace ContainerLCgmneX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7153S2wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7153S2w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7153S2w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'occasion' => ['privates', '.errored..service_locator.7153S2w.App\\Entity\\Occasion', NULL, 'Cannot autowire service ".service_locator.7153S2w": it references class "App\\Entity\\Occasion" but no such service exists.'],
            'occasionRepository' => ['privates', 'App\\Repository\\OccasionRepository', 'getOccasionRepositoryService', true],
        ], [
            'occasion' => 'App\\Entity\\Occasion',
            'occasionRepository' => 'App\\Repository\\OccasionRepository',
        ]);
    }
}
