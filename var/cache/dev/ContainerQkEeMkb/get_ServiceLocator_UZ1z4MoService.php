<?php

namespace ContainerQkEeMkb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UZ1z4MoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UZ1z4Mo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UZ1z4Mo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'occasionRepository' => ['privates', 'App\\Repository\\OccasionRepository', 'getOccasionRepositoryService', true],
            'pictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', true],
        ], [
            'entityManager' => '?',
            'occasionRepository' => 'App\\Repository\\OccasionRepository',
            'pictureRepository' => 'App\\Repository\\PictureRepository',
        ]);
    }
}
