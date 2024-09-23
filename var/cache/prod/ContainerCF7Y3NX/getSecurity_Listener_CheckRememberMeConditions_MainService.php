<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckRememberMeConditions_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.check_remember_me_conditions.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.check_remember_me_conditions.main'] = new \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener(['always_remember_me' => true, 'remember_me_parameter' => '_remember_me'], ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
