<?php

namespace ContainerRgD7lqK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_SendMessageService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => 'sync'], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => [0 => 'async'], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => [0 => 'async']], ($container->privates['.service_locator.NZdAz3P'] ?? $container->load('get_ServiceLocator_NZdAz3PService'))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
