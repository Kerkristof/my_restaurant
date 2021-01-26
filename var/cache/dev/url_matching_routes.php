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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/index' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home/contact' => [[['_route' => 'home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/home/message' => [[['_route' => 'home_message', '_controller' => 'App\\Controller\\HomeController::contact_message'], null, null, null, false, false, null]],
        '/plat/index' => [[['_route' => 'plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, null, null, false, false, null]],
        '/plat/new' => [[['_route' => 'plat_new', '_controller' => 'App\\Controller\\PlatController::edit'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|update/([^/]++)(*:194)'
                    .'|delete/([^/]++)(*:217)'
                .')'
                .'|/plat/(?'
                    .'|update/([^/]++)(*:250)'
                    .'|delete(?'
                        .'|/([^/]++)(*:276)'
                        .'|_image/([^/]++)(*:299)'
                    .')'
                    .'|add_image/([^/]++)(*:326)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:371)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'admin_update_user', '_controller' => 'App\\Controller\\AdminController::update_role'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::delete_user'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'plat_update', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        276 => [[['_route' => 'plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'plat_delete_image', '_controller' => 'App\\Controller\\PlatController::delete_image'], ['id'], ['DELETE' => 0], null, false, true, null]],
        326 => [[['_route' => 'plat_add_image', '_controller' => 'App\\Controller\\PlatController::add_image'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
