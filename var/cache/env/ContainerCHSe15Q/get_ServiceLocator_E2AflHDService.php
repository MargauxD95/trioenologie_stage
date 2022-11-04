<?php

namespace ContainerCHSe15Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E2AflHDService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.E2AflHD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E2AflHD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'entityManager' => '?',
        ]);
    }
}
