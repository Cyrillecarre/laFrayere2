<?php

namespace ContainerAOG91ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubscriberControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SubscriberController' shared autowired service.
     *
     * @return \App\Controller\SubscriberController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SubscriberController'] = $instance = new \App\Controller\SubscriberController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\SubscriberController', $container));

        return $instance;
    }
}
