<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminProfileTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Admin\AdminProfileType' shared autowired service.
     *
     * @return \App\Form\Admin\AdminProfileType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Admin\\AdminProfileType'] = new \App\Form\Admin\AdminProfileType();
    }
}
