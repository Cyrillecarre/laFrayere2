<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AdminRepository' shared autowired service.
     *
     * @return \App\Repository\AdminRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AdminRepository'] = new \App\Repository\AdminRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
