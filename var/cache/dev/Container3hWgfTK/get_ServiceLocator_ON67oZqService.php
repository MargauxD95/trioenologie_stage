<?php

namespace Container3hWgfTK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ON67oZqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oN67oZq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oN67oZq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'status' => ['privates', '.errored..service_locator.oN67oZq.App\\Entity\\Status', NULL, 'Cannot autowire service ".service_locator.oN67oZq": it references class "App\\Entity\\Status" but no such service exists.'],
        ], [
            'status' => 'App\\Entity\\Status',
        ]);
    }
}
