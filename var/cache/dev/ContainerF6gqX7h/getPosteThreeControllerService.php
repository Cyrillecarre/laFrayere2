<?php

namespace ContainerF6gqX7h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosteThreeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PosteThreeController' shared autowired service.
     *
     * @return \App\Controller\PosteThreeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PosteThreeController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/PricingService.php';

        $container->services['App\\Controller\\PosteThreeController'] = $instance = new \App\Controller\PosteThreeController(($container->privates['App\\Service\\PricingService'] ??= new \App\Service\PricingService()));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PosteThreeController', $container));

        return $instance;
    }
}
