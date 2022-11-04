<?php

namespace ContainerLCgmneX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\CalendarSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\CalendarSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/CalendarSubscriber.php';

        return $container->privates['App\\EventSubscriber\\CalendarSubscriber'] = new \App\EventSubscriber\CalendarSubscriber(($container->privates['App\\Repository\\OccasionRepository'] ?? $container->load('getOccasionRepositoryService')), ($container->services['router'] ?? $container->getRouterService()));
    }
}
