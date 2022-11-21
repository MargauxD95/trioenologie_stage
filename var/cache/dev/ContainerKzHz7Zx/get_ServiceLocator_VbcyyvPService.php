<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VbcyyvPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vbcyyvP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vbcyyvP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'occasionRepository' => ['privates', 'App\\Repository\\OccasionRepository', 'getOccasionRepositoryService', true],
        ], [
            'occasionRepository' => 'App\\Repository\\OccasionRepository',
        ]);
    }
}
