<?php

namespace Container3hWgfTK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9O2LSwaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9O2LSwa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9O2LSwa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoArticle' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'repoArticle' => 'App\\Repository\\ArticleRepository',
        ]);
    }
}
