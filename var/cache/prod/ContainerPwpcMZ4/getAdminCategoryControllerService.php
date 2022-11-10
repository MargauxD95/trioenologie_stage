<?php

namespace ContainerPwpcMZ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminCategoryControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\AdminCategoryController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminCategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\AdminCategoryController'] = $instance = new \App\Controller\Admin\AdminCategoryController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Admin\\AdminCategoryController', $container));

        return $instance;
    }
}