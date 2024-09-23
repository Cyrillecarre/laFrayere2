<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/validation' => [[['_route' => 'app_validation', '_controller' => 'App\\Controller\\ContactController::emailEnvoye'], null, null, null, false, false, null]],
        '/poste' => [[['_route' => 'app_poste', '_controller' => 'App\\Controller\\PosteController::index'], null, null, null, false, false, null]],
        '/poste/four' => [[['_route' => 'app_poste_four_index', '_controller' => 'App\\Controller\\PosteFourController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/four/new' => [[['_route' => 'app_poste_four_new', '_controller' => 'App\\Controller\\PosteFourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/four/poste/four/error' => [[['_route' => 'app_poste_four_error', '_controller' => 'App\\Controller\\PosteFourController::error'], null, ['GET' => 0], null, false, false, null]],
        '/poste/one' => [[['_route' => 'app_poste_one_index', '_controller' => 'App\\Controller\\PosteOneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/one/new' => [[['_route' => 'app_poste_one_new', '_controller' => 'App\\Controller\\PosteOneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/one/poste/one/error' => [[['_route' => 'app_poste_one_error', '_controller' => 'App\\Controller\\PosteOneController::error'], null, ['GET' => 0], null, false, false, null]],
        '/poste/three' => [[['_route' => 'app_poste_three_index', '_controller' => 'App\\Controller\\PosteThreeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/three/new' => [[['_route' => 'app_poste_three_new', '_controller' => 'App\\Controller\\PosteThreeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/three/poste/three/error' => [[['_route' => 'app_poste_three_error', '_controller' => 'App\\Controller\\PosteThreeController::error'], null, ['GET' => 0], null, false, false, null]],
        '/poste/two' => [[['_route' => 'app_poste_two_index', '_controller' => 'App\\Controller\\PosteTwoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/two/new' => [[['_route' => 'app_poste_two_new', '_controller' => 'App\\Controller\\PosteTwoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/two/poste/two/error' => [[['_route' => 'app_poste_two_error', '_controller' => 'App\\Controller\\PosteTwoController::error'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/subscriber' => [[['_route' => 'app_subscriber', '_controller' => 'App\\Controller\\SubscriberController::index'], null, null, null, false, false, null]],
        '/tarif' => [[['_route' => 'app_tarif', '_controller' => 'App\\Controller\\TarifController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/poste/(?'
                    .'|four/([^/]++)(?'
                        .'|(*:33)'
                        .'|/(?'
                            .'|approve(*:51)'
                            .'|edit(*:62)'
                        .')'
                        .'|(*:70)'
                    .')'
                    .'|one/([^/]++)(?'
                        .'|(*:93)'
                        .'|/(?'
                            .'|approve(*:111)'
                            .'|edit(*:123)'
                        .')'
                        .'|(*:132)'
                    .')'
                    .'|t(?'
                        .'|hree/([^/]++)(?'
                            .'|(*:161)'
                            .'|/(?'
                                .'|approve(*:180)'
                                .'|edit(*:192)'
                            .')'
                            .'|(*:201)'
                        .')'
                        .'|wo/([^/]++)(?'
                            .'|(*:224)'
                            .'|/(?'
                                .'|approve(*:243)'
                                .'|edit(*:255)'
                            .')'
                            .'|(*:264)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_poste_four_show', '_controller' => 'App\\Controller\\PosteFourController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'app_approve_reservation_four', '_controller' => 'App\\Controller\\PosteFourController::approveReservation'], ['id'], null, null, false, false, null]],
        62 => [[['_route' => 'app_poste_four_edit', '_controller' => 'App\\Controller\\PosteFourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        70 => [[['_route' => 'app_poste_four_delete', '_controller' => 'App\\Controller\\PosteFourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_poste_one_show', '_controller' => 'App\\Controller\\PosteOneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        111 => [[['_route' => 'app_approve_reservation_one', '_controller' => 'App\\Controller\\PosteOneController::approveReservation'], ['id'], null, null, false, false, null]],
        123 => [[['_route' => 'app_poste_one_edit', '_controller' => 'App\\Controller\\PosteOneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [[['_route' => 'app_poste_one_delete', '_controller' => 'App\\Controller\\PosteOneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        161 => [[['_route' => 'app_poste_three_show', '_controller' => 'App\\Controller\\PosteThreeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        180 => [[['_route' => 'app_approve_reservation_three', '_controller' => 'App\\Controller\\PosteThreeController::approveReservation'], ['id'], null, null, false, false, null]],
        192 => [[['_route' => 'app_poste_three_edit', '_controller' => 'App\\Controller\\PosteThreeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        201 => [[['_route' => 'app_poste_three_delete', '_controller' => 'App\\Controller\\PosteThreeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_poste_two_show', '_controller' => 'App\\Controller\\PosteTwoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_approve_reservation_two', '_controller' => 'App\\Controller\\PosteTwoController::approveReservation'], ['id'], null, null, false, false, null]],
        255 => [[['_route' => 'app_poste_two_edit', '_controller' => 'App\\Controller\\PosteTwoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [
            [['_route' => 'app_poste_two_delete', '_controller' => 'App\\Controller\\PosteTwoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
