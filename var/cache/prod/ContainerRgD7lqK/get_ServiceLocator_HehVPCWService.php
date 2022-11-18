<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HehVPCWService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.hehVPCW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hehVPCW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'pictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'entityManager' => '?',
            'pictureRepository' => 'App\\Repository\\PictureRepository',
        ]);
    }
}
