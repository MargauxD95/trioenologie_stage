<?php

namespace ContainerPwpcMZ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarouselPictureRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CarouselPictureRepository' shared autowired service.
     *
     * @return \App\Repository\CarouselPictureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CarouselPictureRepository'] = new \App\Repository\CarouselPictureRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
