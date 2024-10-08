<?php

namespace ContainerF6gqX7h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MxsQyG7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mxsQyG7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mxsQyG7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'posteTwoRepository' => ['privates', 'App\\Repository\\PosteTwoRepository', 'getPosteTwoRepositoryService', true],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'posteTwoRepository' => 'App\\Repository\\PosteTwoRepository',
        ]);
    }
}
