<?php

namespace ContainerAOG91ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.6G.FsjB', 'get_ServiceLocator_6G_FsjBService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.N1Oi9oL', 'get_ServiceLocator_N1Oi9oLService', true],
            'App\\Controller\\PosteFourController::approveReservation' => ['privates', '.service_locator.yCOYlBP', 'get_ServiceLocator_YCOYlBPService', true],
            'App\\Controller\\PosteFourController::delete' => ['privates', '.service_locator.yCOYlBP', 'get_ServiceLocator_YCOYlBPService', true],
            'App\\Controller\\PosteFourController::edit' => ['privates', '.service_locator.yCOYlBP', 'get_ServiceLocator_YCOYlBPService', true],
            'App\\Controller\\PosteFourController::index' => ['privates', '.service_locator.6hE3Lc9', 'get_ServiceLocator_6hE3Lc9Service', true],
            'App\\Controller\\PosteFourController::new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteFourController::show' => ['privates', '.service_locator.gy4k0J.', 'get_ServiceLocator_Gy4k0J_Service', true],
            'App\\Controller\\PosteOneController::approveReservation' => ['privates', '.service_locator.fF5QxaM', 'get_ServiceLocator_FF5QxaMService', true],
            'App\\Controller\\PosteOneController::delete' => ['privates', '.service_locator.fF5QxaM', 'get_ServiceLocator_FF5QxaMService', true],
            'App\\Controller\\PosteOneController::edit' => ['privates', '.service_locator.fF5QxaM', 'get_ServiceLocator_FF5QxaMService', true],
            'App\\Controller\\PosteOneController::index' => ['privates', '.service_locator.QopCnSh', 'get_ServiceLocator_QopCnShService', true],
            'App\\Controller\\PosteOneController::new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteOneController::show' => ['privates', '.service_locator.ZKPYkz2', 'get_ServiceLocator_ZKPYkz2Service', true],
            'App\\Controller\\PosteThreeController::approveReservation' => ['privates', '.service_locator.lKUROM5', 'get_ServiceLocator_LKUROM5Service', true],
            'App\\Controller\\PosteThreeController::delete' => ['privates', '.service_locator.lKUROM5', 'get_ServiceLocator_LKUROM5Service', true],
            'App\\Controller\\PosteThreeController::edit' => ['privates', '.service_locator.lKUROM5', 'get_ServiceLocator_LKUROM5Service', true],
            'App\\Controller\\PosteThreeController::index' => ['privates', '.service_locator.UxwHRlX', 'get_ServiceLocator_UxwHRlXService', true],
            'App\\Controller\\PosteThreeController::new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteThreeController::show' => ['privates', '.service_locator.PliRqEp', 'get_ServiceLocator_PliRqEpService', true],
            'App\\Controller\\PosteTwoController::approveReservation' => ['privates', '.service_locator.iuBNA6g', 'get_ServiceLocator_IuBNA6gService', true],
            'App\\Controller\\PosteTwoController::delete' => ['privates', '.service_locator.iuBNA6g', 'get_ServiceLocator_IuBNA6gService', true],
            'App\\Controller\\PosteTwoController::edit' => ['privates', '.service_locator.iuBNA6g', 'get_ServiceLocator_IuBNA6gService', true],
            'App\\Controller\\PosteTwoController::index' => ['privates', '.service_locator.ZWdYb83', 'get_ServiceLocator_ZWdYb83Service', true],
            'App\\Controller\\PosteTwoController::new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteTwoController::show' => ['privates', '.service_locator.ASAIa0Z', 'get_ServiceLocator_ASAIa0ZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.N1Oi9oL', 'get_ServiceLocator_N1Oi9oLService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.6G.FsjB', 'get_ServiceLocator_6G_FsjBService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.N1Oi9oL', 'get_ServiceLocator_N1Oi9oLService', true],
            'App\\Controller\\PosteFourController:approveReservation' => ['privates', '.service_locator.yCOYlBP', 'get_ServiceLocator_YCOYlBPService', true],
            'App\\Controller\\PosteFourController:delete' => ['privates', '.service_locator.yCOYlBP', 'get_ServiceLocator_YCOYlBPService', true],
            'App\\Controller\\PosteFourController:edit' => ['privates', '.service_locator.yCOYlBP', 'get_ServiceLocator_YCOYlBPService', true],
            'App\\Controller\\PosteFourController:index' => ['privates', '.service_locator.6hE3Lc9', 'get_ServiceLocator_6hE3Lc9Service', true],
            'App\\Controller\\PosteFourController:new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteFourController:show' => ['privates', '.service_locator.gy4k0J.', 'get_ServiceLocator_Gy4k0J_Service', true],
            'App\\Controller\\PosteOneController:approveReservation' => ['privates', '.service_locator.fF5QxaM', 'get_ServiceLocator_FF5QxaMService', true],
            'App\\Controller\\PosteOneController:delete' => ['privates', '.service_locator.fF5QxaM', 'get_ServiceLocator_FF5QxaMService', true],
            'App\\Controller\\PosteOneController:edit' => ['privates', '.service_locator.fF5QxaM', 'get_ServiceLocator_FF5QxaMService', true],
            'App\\Controller\\PosteOneController:index' => ['privates', '.service_locator.QopCnSh', 'get_ServiceLocator_QopCnShService', true],
            'App\\Controller\\PosteOneController:new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteOneController:show' => ['privates', '.service_locator.ZKPYkz2', 'get_ServiceLocator_ZKPYkz2Service', true],
            'App\\Controller\\PosteThreeController:approveReservation' => ['privates', '.service_locator.lKUROM5', 'get_ServiceLocator_LKUROM5Service', true],
            'App\\Controller\\PosteThreeController:delete' => ['privates', '.service_locator.lKUROM5', 'get_ServiceLocator_LKUROM5Service', true],
            'App\\Controller\\PosteThreeController:edit' => ['privates', '.service_locator.lKUROM5', 'get_ServiceLocator_LKUROM5Service', true],
            'App\\Controller\\PosteThreeController:index' => ['privates', '.service_locator.UxwHRlX', 'get_ServiceLocator_UxwHRlXService', true],
            'App\\Controller\\PosteThreeController:new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteThreeController:show' => ['privates', '.service_locator.PliRqEp', 'get_ServiceLocator_PliRqEpService', true],
            'App\\Controller\\PosteTwoController:approveReservation' => ['privates', '.service_locator.iuBNA6g', 'get_ServiceLocator_IuBNA6gService', true],
            'App\\Controller\\PosteTwoController:delete' => ['privates', '.service_locator.iuBNA6g', 'get_ServiceLocator_IuBNA6gService', true],
            'App\\Controller\\PosteTwoController:edit' => ['privates', '.service_locator.iuBNA6g', 'get_ServiceLocator_IuBNA6gService', true],
            'App\\Controller\\PosteTwoController:index' => ['privates', '.service_locator.ZWdYb83', 'get_ServiceLocator_ZWdYb83Service', true],
            'App\\Controller\\PosteTwoController:new' => ['privates', '.service_locator.WZeIXfO', 'get_ServiceLocator_WZeIXfOService', true],
            'App\\Controller\\PosteTwoController:show' => ['privates', '.service_locator.ASAIa0Z', 'get_ServiceLocator_ASAIa0ZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.N1Oi9oL', 'get_ServiceLocator_N1Oi9oLService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\PosteFourController::approveReservation' => '?',
            'App\\Controller\\PosteFourController::delete' => '?',
            'App\\Controller\\PosteFourController::edit' => '?',
            'App\\Controller\\PosteFourController::index' => '?',
            'App\\Controller\\PosteFourController::new' => '?',
            'App\\Controller\\PosteFourController::show' => '?',
            'App\\Controller\\PosteOneController::approveReservation' => '?',
            'App\\Controller\\PosteOneController::delete' => '?',
            'App\\Controller\\PosteOneController::edit' => '?',
            'App\\Controller\\PosteOneController::index' => '?',
            'App\\Controller\\PosteOneController::new' => '?',
            'App\\Controller\\PosteOneController::show' => '?',
            'App\\Controller\\PosteThreeController::approveReservation' => '?',
            'App\\Controller\\PosteThreeController::delete' => '?',
            'App\\Controller\\PosteThreeController::edit' => '?',
            'App\\Controller\\PosteThreeController::index' => '?',
            'App\\Controller\\PosteThreeController::new' => '?',
            'App\\Controller\\PosteThreeController::show' => '?',
            'App\\Controller\\PosteTwoController::approveReservation' => '?',
            'App\\Controller\\PosteTwoController::delete' => '?',
            'App\\Controller\\PosteTwoController::edit' => '?',
            'App\\Controller\\PosteTwoController::index' => '?',
            'App\\Controller\\PosteTwoController::new' => '?',
            'App\\Controller\\PosteTwoController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\PosteFourController:approveReservation' => '?',
            'App\\Controller\\PosteFourController:delete' => '?',
            'App\\Controller\\PosteFourController:edit' => '?',
            'App\\Controller\\PosteFourController:index' => '?',
            'App\\Controller\\PosteFourController:new' => '?',
            'App\\Controller\\PosteFourController:show' => '?',
            'App\\Controller\\PosteOneController:approveReservation' => '?',
            'App\\Controller\\PosteOneController:delete' => '?',
            'App\\Controller\\PosteOneController:edit' => '?',
            'App\\Controller\\PosteOneController:index' => '?',
            'App\\Controller\\PosteOneController:new' => '?',
            'App\\Controller\\PosteOneController:show' => '?',
            'App\\Controller\\PosteThreeController:approveReservation' => '?',
            'App\\Controller\\PosteThreeController:delete' => '?',
            'App\\Controller\\PosteThreeController:edit' => '?',
            'App\\Controller\\PosteThreeController:index' => '?',
            'App\\Controller\\PosteThreeController:new' => '?',
            'App\\Controller\\PosteThreeController:show' => '?',
            'App\\Controller\\PosteTwoController:approveReservation' => '?',
            'App\\Controller\\PosteTwoController:delete' => '?',
            'App\\Controller\\PosteTwoController:edit' => '?',
            'App\\Controller\\PosteTwoController:index' => '?',
            'App\\Controller\\PosteTwoController:new' => '?',
            'App\\Controller\\PosteTwoController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
