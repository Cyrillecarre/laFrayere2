<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gy4k0J_Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.gy4k0J.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gy4k0J.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'posteFour' => ['privates', '.errored..service_locator.gy4k0J..App\\Entity\\PosteFour', NULL, 'Cannot autowire service ".service_locator.gy4k0J.": it needs an instance of "App\\Entity\\PosteFour" but this type has been excluded in "config/services.yaml".'],
        ], [
            'posteFour' => 'App\\Entity\\PosteFour',
        ]);
    }
}
