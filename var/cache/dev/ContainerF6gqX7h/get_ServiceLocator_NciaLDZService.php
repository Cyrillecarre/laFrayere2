<?php

namespace ContainerF6gqX7h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NciaLDZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nciaLDZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nciaLDZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'posteFourRepository' => ['privates', 'App\\Repository\\PosteFourRepository', 'getPosteFourRepositoryService', true],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'posteFourRepository' => 'App\\Repository\\PosteFourRepository',
        ]);
    }
}
