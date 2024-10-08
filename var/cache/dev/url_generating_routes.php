<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_validation' => [[], ['_controller' => 'App\\Controller\\ContactController::emailEnvoye'], [], [['text', '/validation']], [], [], []],
    'app_reserve_all' => [[], ['_controller' => 'App\\Controller\\MultiResaController::reserveAll'], [], [['text', '/reserve-all']], [], [], []],
    'app_multi_prix' => [[], ['_controller' => 'App\\Controller\\MultiResaController::summary'], [], [['text', '/prix']], [], [], []],
    'app_payment_create' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'app_payment_success' => [[], ['_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], [], [['text', '/payment-success']], [], [], []],
    'app_payment_cancel' => [[], ['_controller' => 'App\\Controller\\PaymentController::paymentCancel'], [], [['text', '/payment-cancel']], [], [], []],
    'app_paymentMulti_create' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSessionMulti'], [], [['text', '/create-checkout-session-multi']], [], [], []],
    'app_paymentMulti_success' => [[], ['_controller' => 'App\\Controller\\PaymentController::paymentSuccessMulti'], [], [['text', '/payment-success-multi']], [], [], []],
    'app_poste' => [[], ['_controller' => 'App\\Controller\\PosteController::index'], [], [['text', '/poste']], [], [], []],
    'app_poste_four_index' => [[], ['_controller' => 'App\\Controller\\PosteFourController::index'], [], [['text', '/poste/four/']], [], [], []],
    'app_poste_four_new' => [[], ['_controller' => 'App\\Controller\\PosteFourController::new'], [], [['text', '/poste/four/new']], [], [], []],
    'app_poste_four_prix' => [[], ['_controller' => 'App\\Controller\\PosteFourController::summary'], [], [['text', '/poste/four/prix']], [], [], []],
    'app_poste_four_error' => [[], ['_controller' => 'App\\Controller\\PosteFourController::error'], [], [['text', '/poste/four/poste/four/error']], [], [], []],
    'app_poste_four_show' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'app_approve_reservation_four' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'app_poste_four_edit' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'app_poste_four_delete' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'app_poste_one_index' => [[], ['_controller' => 'App\\Controller\\PosteOneController::index'], [], [['text', '/poste/one/']], [], [], []],
    'app_poste_one_new' => [[], ['_controller' => 'App\\Controller\\PosteOneController::new'], [], [['text', '/poste/one/new']], [], [], []],
    'app_poste_one_prix' => [[], ['_controller' => 'App\\Controller\\PosteOneController::summary'], [], [['text', '/poste/one/prix']], [], [], []],
    'app_poste_one_error' => [[], ['_controller' => 'App\\Controller\\PosteOneController::error'], [], [['text', '/poste/one/poste/one/error']], [], [], []],
    'app_poste_one_show' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'app_approve_reservation_one' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'app_poste_one_edit' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'app_poste_one_delete' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'app_poste_three_index' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::index'], [], [['text', '/poste/three/']], [], [], []],
    'app_poste_three_new' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::new'], [], [['text', '/poste/three/new']], [], [], []],
    'app_poste_three_prix' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::summary'], [], [['text', '/poste/three/prix']], [], [], []],
    'app_poste_three_error' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::error'], [], [['text', '/poste/three/poste/three/error']], [], [], []],
    'app_poste_three_show' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'app_approve_reservation_three' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'app_poste_three_edit' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'app_poste_three_delete' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'app_poste_two_index' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::index'], [], [['text', '/poste/two/']], [], [], []],
    'app_poste_two_new' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::new'], [], [['text', '/poste/two/new']], [], [], []],
    'app_poste_two_prix' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::summary'], [], [['text', '/poste/two/prix']], [], [], []],
    'app_poste_two_error' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::error'], [], [['text', '/poste/two/poste/two/error']], [], [], []],
    'app_poste_two_show' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'app_approve_reservation_two' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'app_poste_two_edit' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'app_poste_two_delete' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'app_poste_one_cancel' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::cancel'], [], [['text', '/cancel'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two/poste']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_subscriber' => [[], ['_controller' => 'App\\Controller\\SubscriberController::index'], [], [['text', '/subscriber']], [], [], []],
    'app_tarif' => [[], ['_controller' => 'App\\Controller\\TarifController::index'], [], [['text', '/tarif']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'App\Controller\ContactController::emailEnvoye' => [[], ['_controller' => 'App\\Controller\\ContactController::emailEnvoye'], [], [['text', '/validation']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\MultiResaController::reserveAll' => [[], ['_controller' => 'App\\Controller\\MultiResaController::reserveAll'], [], [['text', '/reserve-all']], [], [], []],
    'App\Controller\MultiResaController::summary' => [[], ['_controller' => 'App\\Controller\\MultiResaController::summary'], [], [['text', '/prix']], [], [], []],
    'App\Controller\PaymentController::createCheckoutSession' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'App\Controller\PaymentController::paymentSuccess' => [[], ['_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], [], [['text', '/payment-success']], [], [], []],
    'App\Controller\PaymentController::paymentCancel' => [[], ['_controller' => 'App\\Controller\\PaymentController::paymentCancel'], [], [['text', '/payment-cancel']], [], [], []],
    'App\Controller\PaymentController::createCheckoutSessionMulti' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSessionMulti'], [], [['text', '/create-checkout-session-multi']], [], [], []],
    'App\Controller\PaymentController::paymentSuccessMulti' => [[], ['_controller' => 'App\\Controller\\PaymentController::paymentSuccessMulti'], [], [['text', '/payment-success-multi']], [], [], []],
    'App\Controller\PosteController::index' => [[], ['_controller' => 'App\\Controller\\PosteController::index'], [], [['text', '/poste']], [], [], []],
    'App\Controller\PosteFourController::index' => [[], ['_controller' => 'App\\Controller\\PosteFourController::index'], [], [['text', '/poste/four/']], [], [], []],
    'App\Controller\PosteFourController::new' => [[], ['_controller' => 'App\\Controller\\PosteFourController::new'], [], [['text', '/poste/four/new']], [], [], []],
    'App\Controller\PosteFourController::summary' => [[], ['_controller' => 'App\\Controller\\PosteFourController::summary'], [], [['text', '/poste/four/prix']], [], [], []],
    'App\Controller\PosteFourController::error' => [[], ['_controller' => 'App\\Controller\\PosteFourController::error'], [], [['text', '/poste/four/poste/four/error']], [], [], []],
    'App\Controller\PosteFourController::show' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'App\Controller\PosteFourController::approveReservation' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'App\Controller\PosteFourController::edit' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'App\Controller\PosteFourController::delete' => [['id'], ['_controller' => 'App\\Controller\\PosteFourController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/four']], [], [], []],
    'App\Controller\PosteOneController::index' => [[], ['_controller' => 'App\\Controller\\PosteOneController::index'], [], [['text', '/poste/one/']], [], [], []],
    'App\Controller\PosteOneController::new' => [[], ['_controller' => 'App\\Controller\\PosteOneController::new'], [], [['text', '/poste/one/new']], [], [], []],
    'App\Controller\PosteOneController::summary' => [[], ['_controller' => 'App\\Controller\\PosteOneController::summary'], [], [['text', '/poste/one/prix']], [], [], []],
    'App\Controller\PosteOneController::error' => [[], ['_controller' => 'App\\Controller\\PosteOneController::error'], [], [['text', '/poste/one/poste/one/error']], [], [], []],
    'App\Controller\PosteOneController::show' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'App\Controller\PosteOneController::approveReservation' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'App\Controller\PosteOneController::edit' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'App\Controller\PosteOneController::delete' => [['id'], ['_controller' => 'App\\Controller\\PosteOneController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/one']], [], [], []],
    'App\Controller\PosteThreeController::index' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::index'], [], [['text', '/poste/three/']], [], [], []],
    'App\Controller\PosteThreeController::new' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::new'], [], [['text', '/poste/three/new']], [], [], []],
    'App\Controller\PosteThreeController::summary' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::summary'], [], [['text', '/poste/three/prix']], [], [], []],
    'App\Controller\PosteThreeController::error' => [[], ['_controller' => 'App\\Controller\\PosteThreeController::error'], [], [['text', '/poste/three/poste/three/error']], [], [], []],
    'App\Controller\PosteThreeController::show' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'App\Controller\PosteThreeController::approveReservation' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'App\Controller\PosteThreeController::edit' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'App\Controller\PosteThreeController::delete' => [['id'], ['_controller' => 'App\\Controller\\PosteThreeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/three']], [], [], []],
    'App\Controller\PosteTwoController::index' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::index'], [], [['text', '/poste/two/']], [], [], []],
    'App\Controller\PosteTwoController::new' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::new'], [], [['text', '/poste/two/new']], [], [], []],
    'App\Controller\PosteTwoController::summary' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::summary'], [], [['text', '/poste/two/prix']], [], [], []],
    'App\Controller\PosteTwoController::error' => [[], ['_controller' => 'App\\Controller\\PosteTwoController::error'], [], [['text', '/poste/two/poste/two/error']], [], [], []],
    'App\Controller\PosteTwoController::show' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'App\Controller\PosteTwoController::approveReservation' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::approveReservation'], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'App\Controller\PosteTwoController::edit' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'App\Controller\PosteTwoController::delete' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two']], [], [], []],
    'App\Controller\PosteTwoController::cancel' => [['id'], ['_controller' => 'App\\Controller\\PosteTwoController::cancel'], [], [['text', '/cancel'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste/two/poste']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\ReservationController::index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SubscriberController::index' => [[], ['_controller' => 'App\\Controller\\SubscriberController::index'], [], [['text', '/subscriber']], [], [], []],
    'App\Controller\TarifController::index' => [[], ['_controller' => 'App\\Controller\\TarifController::index'], [], [['text', '/tarif']], [], [], []],
];
