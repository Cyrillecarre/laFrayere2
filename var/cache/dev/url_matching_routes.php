<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/validation' => [[['_route' => 'app_validation', '_controller' => 'App\\Controller\\ContactController::emailEnvoye'], null, null, null, false, false, null]],
        '/reserve-all' => [[['_route' => 'app_reserve_all', '_controller' => 'App\\Controller\\MultiResaController::reserveAll'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prix' => [[['_route' => 'app_multi_prix', '_controller' => 'App\\Controller\\MultiResaController::summary'], null, ['GET' => 0], null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_payment_create', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/payment-success' => [[['_route' => 'app_payment_success', '_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], null, null, null, false, false, null]],
        '/payment-cancel' => [[['_route' => 'app_payment_cancel', '_controller' => 'App\\Controller\\PaymentController::paymentCancel'], null, null, null, false, false, null]],
        '/create-checkout-session-multi' => [[['_route' => 'app_paymentMulti_create', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSessionMulti'], null, ['POST' => 0], null, false, false, null]],
        '/payment-success-multi' => [[['_route' => 'app_paymentMulti_success', '_controller' => 'App\\Controller\\PaymentController::paymentSuccessMulti'], null, null, null, false, false, null]],
        '/poste' => [[['_route' => 'app_poste', '_controller' => 'App\\Controller\\PosteController::index'], null, null, null, false, false, null]],
        '/poste/four' => [[['_route' => 'app_poste_four_index', '_controller' => 'App\\Controller\\PosteFourController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/four/new' => [[['_route' => 'app_poste_four_new', '_controller' => 'App\\Controller\\PosteFourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/four/prix' => [[['_route' => 'app_poste_four_prix', '_controller' => 'App\\Controller\\PosteFourController::summary'], null, ['GET' => 0], null, false, false, null]],
        '/poste/four/poste/four/error' => [[['_route' => 'app_poste_four_error', '_controller' => 'App\\Controller\\PosteFourController::error'], null, ['GET' => 0], null, false, false, null]],
        '/poste/one' => [[['_route' => 'app_poste_one_index', '_controller' => 'App\\Controller\\PosteOneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/one/new' => [[['_route' => 'app_poste_one_new', '_controller' => 'App\\Controller\\PosteOneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/one/prix' => [[['_route' => 'app_poste_one_prix', '_controller' => 'App\\Controller\\PosteOneController::summary'], null, ['GET' => 0], null, false, false, null]],
        '/poste/one/poste/one/error' => [[['_route' => 'app_poste_one_error', '_controller' => 'App\\Controller\\PosteOneController::error'], null, ['GET' => 0], null, false, false, null]],
        '/poste/three' => [[['_route' => 'app_poste_three_index', '_controller' => 'App\\Controller\\PosteThreeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/three/new' => [[['_route' => 'app_poste_three_new', '_controller' => 'App\\Controller\\PosteThreeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/three/prix' => [[['_route' => 'app_poste_three_prix', '_controller' => 'App\\Controller\\PosteThreeController::summary'], null, ['GET' => 0], null, false, false, null]],
        '/poste/three/poste/three/error' => [[['_route' => 'app_poste_three_error', '_controller' => 'App\\Controller\\PosteThreeController::error'], null, ['GET' => 0], null, false, false, null]],
        '/poste/two' => [[['_route' => 'app_poste_two_index', '_controller' => 'App\\Controller\\PosteTwoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/two/new' => [[['_route' => 'app_poste_two_new', '_controller' => 'App\\Controller\\PosteTwoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/two/prix' => [[['_route' => 'app_poste_two_prix', '_controller' => 'App\\Controller\\PosteTwoController::summary'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/poste/(?'
                    .'|four/([^/]++)(?'
                        .'|(*:228)'
                        .'|/(?'
                            .'|approve(*:247)'
                            .'|edit(*:259)'
                        .')'
                        .'|(*:268)'
                    .')'
                    .'|one/([^/]++)(?'
                        .'|(*:292)'
                        .'|/(?'
                            .'|approve(*:311)'
                            .'|edit(*:323)'
                        .')'
                        .'|(*:332)'
                    .')'
                    .'|t(?'
                        .'|hree/([^/]++)(?'
                            .'|(*:361)'
                            .'|/(?'
                                .'|approve(*:380)'
                                .'|edit(*:392)'
                            .')'
                            .'|(*:401)'
                        .')'
                        .'|wo/(?'
                            .'|([^/]++)(?'
                                .'|(*:427)'
                                .'|/(?'
                                    .'|approve(*:446)'
                                    .'|edit(*:458)'
                                .')'
                                .'|(*:467)'
                            .')'
                            .'|poste/([^/]++)/cancel(*:497)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'app_poste_four_show', '_controller' => 'App\\Controller\\PosteFourController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'app_approve_reservation_four', '_controller' => 'App\\Controller\\PosteFourController::approveReservation'], ['id'], null, null, false, false, null]],
        259 => [[['_route' => 'app_poste_four_edit', '_controller' => 'App\\Controller\\PosteFourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'app_poste_four_delete', '_controller' => 'App\\Controller\\PosteFourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_poste_one_show', '_controller' => 'App\\Controller\\PosteOneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'app_approve_reservation_one', '_controller' => 'App\\Controller\\PosteOneController::approveReservation'], ['id'], null, null, false, false, null]],
        323 => [[['_route' => 'app_poste_one_edit', '_controller' => 'App\\Controller\\PosteOneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [[['_route' => 'app_poste_one_delete', '_controller' => 'App\\Controller\\PosteOneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_poste_three_show', '_controller' => 'App\\Controller\\PosteThreeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        380 => [[['_route' => 'app_approve_reservation_three', '_controller' => 'App\\Controller\\PosteThreeController::approveReservation'], ['id'], null, null, false, false, null]],
        392 => [[['_route' => 'app_poste_three_edit', '_controller' => 'App\\Controller\\PosteThreeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        401 => [[['_route' => 'app_poste_three_delete', '_controller' => 'App\\Controller\\PosteThreeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        427 => [[['_route' => 'app_poste_two_show', '_controller' => 'App\\Controller\\PosteTwoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'app_approve_reservation_two', '_controller' => 'App\\Controller\\PosteTwoController::approveReservation'], ['id'], null, null, false, false, null]],
        458 => [[['_route' => 'app_poste_two_edit', '_controller' => 'App\\Controller\\PosteTwoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        467 => [[['_route' => 'app_poste_two_delete', '_controller' => 'App\\Controller\\PosteTwoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        497 => [
            [['_route' => 'app_poste_one_cancel', '_controller' => 'App\\Controller\\PosteTwoController::cancel'], ['id'], ['DELETE' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
