<?php

namespace ContainerAOG91ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YCOYlBPService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yCOYlBP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yCOYlBP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'posteFour' => ['privates', '.errored..service_locator.yCOYlBP.App\\Entity\\PosteFour', NULL, 'Cannot autowire service ".service_locator.yCOYlBP": it needs an instance of "App\\Entity\\PosteFour" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'posteFour' => 'App\\Entity\\PosteFour',
        ]);
    }
}
