<?php

namespace ContainerPwpcMZ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminUserTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Admin\AdminUserType' shared autowired service.
     *
     * @return \App\Form\Admin\AdminUserType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Admin\\AdminUserType'] = new \App\Form\Admin\AdminUserType();
    }
}