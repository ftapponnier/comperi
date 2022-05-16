<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/efconnect']], [], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/elfinder']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/newsletter/admin']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\MainController::contact'], [], [['text', '/contact']], [], [], []],
    'newsletter_home' => [[], ['_controller' => 'App\\Controller\\NewsletterController::index'], [], [['text', '/newsletter/']], [], [], []],
    'newsletter_confirm' => [['id', 'token'], ['_controller' => 'App\\Controller\\NewsletterController::confirm'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/newsletter/confirm']], [], [], []],
    'newsletter_prepare' => [[], ['_controller' => 'App\\Controller\\NewsletterController::prepare'], [], [['text', '/newsletter/prepare']], [], [], []],
    'newsletter_list' => [[], ['_controller' => 'App\\Controller\\NewsletterController::list'], [], [['text', '/newsletteradmin/list']], [], [], []],
    'newsletter_send' => [['id'], ['_controller' => 'App\\Controller\\NewsletterController::send'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newsletteradmin/send']], [], [], []],
    'newsletter_unsubscribe' => [['id', 'newsletter', 'token'], ['_controller' => 'App\\Controller\\NewsletterController::unsubscribe'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'newsletter', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/newsletter/unsubscribe']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];