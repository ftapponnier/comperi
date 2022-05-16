<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/newsletter/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MainController::contact'], null, null, null, false, false, null]],
        '/newsletter' => [[['_route' => 'newsletter_home', '_controller' => 'App\\Controller\\NewsletterController::index'], null, null, null, true, false, null]],
        '/newsletter/prepare' => [[['_route' => 'newsletter_prepare', '_controller' => 'App\\Controller\\NewsletterController::prepare'], null, null, null, false, false, null]],
        '/newsletteradmin/list' => [[['_route' => 'newsletter_list', '_controller' => 'App\\Controller\\NewsletterController::list'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:48)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:90)'
                .')'
                .'|/newsletter(?'
                    .'|/(?'
                        .'|confirm/([^/]++)/([^/]++)(*:141)'
                        .'|unsubscribe/([^/]++)/([^/]++)/([^/]++)(*:187)'
                    .')'
                    .'|admin/send/([^/]++)(*:215)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        90 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        141 => [[['_route' => 'newsletter_confirm', '_controller' => 'App\\Controller\\NewsletterController::confirm'], ['id', 'token'], null, null, false, true, null]],
        187 => [[['_route' => 'newsletter_unsubscribe', '_controller' => 'App\\Controller\\NewsletterController::unsubscribe'], ['id', 'newsletter', 'token'], null, null, false, true, null]],
        215 => [
            [['_route' => 'newsletter_send', '_controller' => 'App\\Controller\\NewsletterController::send'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
