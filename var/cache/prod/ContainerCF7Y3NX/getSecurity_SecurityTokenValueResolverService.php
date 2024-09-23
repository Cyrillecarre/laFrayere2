<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_SecurityTokenValueResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.security_token_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.security_token_value_resolver'] = new \Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)));
    }
}
