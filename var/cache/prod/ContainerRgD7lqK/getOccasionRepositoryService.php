<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOccasionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\OccasionRepository' shared autowired service.
     *
     * @return \App\Repository\OccasionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OccasionRepository'] = new \App\Repository\OccasionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
