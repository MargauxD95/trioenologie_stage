<?php

namespace ContainerPwpcMZ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarouselRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CarouselRepository' shared autowired service.
     *
     * @return \App\Repository\CarouselRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CarouselRepository'] = new \App\Repository\CarouselRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
