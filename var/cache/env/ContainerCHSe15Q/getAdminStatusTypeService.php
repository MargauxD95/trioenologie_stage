<?php

namespace ContainerCHSe15Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminStatusTypeService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private 'App\Form\Admin\AdminStatusType' shared autowired service.
     *
     * @return \App\Form\Admin\AdminStatusType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Admin/AdminStatusType.php';

        return $container->privates['App\\Form\\Admin\\AdminStatusType'] = new \App\Form\Admin\AdminStatusType();
    }
}
