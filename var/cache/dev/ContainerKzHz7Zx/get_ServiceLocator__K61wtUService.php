<?php

namespace ContainerKzHz7Zx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__K61wtUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..K61wtU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..K61wtU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'occasion' => ['privates', '.errored..service_locator..K61wtU.App\\Entity\\Occasion', NULL, 'Cannot autowire service ".service_locator..K61wtU": it references class "App\\Entity\\Occasion" but no such service exists.'],
        ], [
            'occasion' => 'App\\Entity\\Occasion',
        ]);
    }
}
