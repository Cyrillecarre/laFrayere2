<?php

namespace ContainerAOG91ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosteTwoTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PosteTwoType' shared autowired service.
     *
     * @return \App\Form\PosteTwoType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PosteTwoType'] = new \App\Form\PosteTwoType();
    }
}
