<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'page_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::admin'], null, null, null, false, false, null]],
        '/admin/movies' => [[['_route' => 'page_admin_movies', '_controller' => 'App\\Controller\\Admin\\AdminController::films'], null, null, null, false, false, null]],
        '/admin/movies/add' => [[['_route' => 'page_admin_movies_add', '_controller' => 'App\\Controller\\Admin\\AdminController::addMovies'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'page_admin_users', '_controller' => 'App\\Controller\\Admin\\AdminController::users'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'page_login', '_controller' => 'App\\Controller\\Auth\\AuthController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'page_register', '_controller' => 'App\\Controller\\Auth\\AuthController::register'], null, null, null, false, false, null]],
        '/forgot' => [[['_route' => 'page_forgot', '_controller' => 'App\\Controller\\Auth\\AuthController::forgot'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'page_reset', '_controller' => 'App\\Controller\\Auth\\AuthController::reset'], null, null, null, false, false, null]],
        '/confirm' => [[['_route' => 'page_confirm', '_controller' => 'App\\Controller\\Auth\\AuthController::confirm'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'page_homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'page_category', '_controller' => 'App\\Controller\\Movie\\CategoryController::category'], null, null, null, false, false, null]],
        '/discover' => [[['_route' => 'page_discover', '_controller' => 'App\\Controller\\Movie\\CategoryController::discover'], null, null, null, false, false, null]],
        '/lists' => [[['_route' => 'page_lists', '_controller' => 'App\\Controller\\Movie\\ListController::index'], null, null, null, false, false, null]],
        '/movie' => [[['_route' => 'page_detail_movie', '_controller' => 'App\\Controller\\Movie\\MovieController::detail'], null, null, null, false, false, null]],
        '/serie' => [[['_route' => 'page_detail_serie', '_controller' => 'App\\Controller\\Movie\\MovieController::detailSerie'], null, null, null, false, false, null]],
        '/subscriptions' => [[['_route' => 'page_subscription', '_controller' => 'App\\Controller\\Other\\SubscriptionController::index'], null, null, null, false, false, null]],
        '/upload' => [[['_route' => 'page_upload', '_controller' => 'App\\Controller\\Other\\UploadController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
