<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Doctrine_SystemCachePool_TaggableService extends App_KernelProdContainer
{
    /*
     * Gets the private '.doctrine.system_cache_pool.taggable' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine.system_cache_pool.taggable'] = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(($container->privates['doctrine.system_cache_pool'] ?? self::getDoctrine_SystemCachePoolService($container)));
    }
}
