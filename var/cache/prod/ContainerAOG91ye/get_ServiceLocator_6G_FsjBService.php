<?php

namespace ContainerAOG91ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6G_FsjBService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.6G.FsjB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6G.FsjB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'posteFourRepository' => ['privates', 'App\\Repository\\PosteFourRepository', 'getPosteFourRepositoryService', true],
            'posteOneRepository' => ['privates', 'App\\Repository\\PosteOneRepository', 'getPosteOneRepositoryService', true],
            'posteThreeRepository' => ['privates', 'App\\Repository\\PosteThreeRepository', 'getPosteThreeRepositoryService', true],
            'posteTwoRepository' => ['privates', 'App\\Repository\\PosteTwoRepository', 'getPosteTwoRepositoryService', true],
        ], [
            'posteFourRepository' => 'App\\Repository\\PosteFourRepository',
            'posteOneRepository' => 'App\\Repository\\PosteOneRepository',
            'posteThreeRepository' => 'App\\Repository\\PosteThreeRepository',
            'posteTwoRepository' => 'App\\Repository\\PosteTwoRepository',
        ]);
    }
}
