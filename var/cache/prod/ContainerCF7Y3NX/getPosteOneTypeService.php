<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosteOneTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PosteOneType' shared autowired service.
     *
     * @return \App\Form\PosteOneType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PosteOneType'] = new \App\Form\PosteOneType();
    }
}
