<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosteThreeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PosteThreeController' shared autowired service.
     *
     * @return \App\Controller\PosteThreeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PosteThreeController'] = $instance = new \App\Controller\PosteThreeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PosteThreeController', $container));

        return $instance;
    }
}
