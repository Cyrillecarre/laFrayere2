<?php

namespace ContainerCF7Y3NX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosteFourTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PosteFourType' shared autowired service.
     *
     * @return \App\Form\PosteFourType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PosteFourType'] = new \App\Form\PosteFourType();
    }
}
