<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    // $container['renderer'] = function ($c) {
    //     $settings = $c->get('settings')['renderer'];
    //     return new \Slim\Views\PhpRenderer($settings['template_path']);
    // };

    $container['view'] = function ($c) {
        $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', ['cache' => false]);
        $view->addExtension(new \Slim\Views\TwigExtension(
            $c->router,
            $c->request->getUri()
        ));
        return $view;
    };


    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    //Controllers
    $container['PersonaController'] = function ($c) {
        return new \App\Controllers\PersonaController($c);
    };
    $container['ClienteController'] = function ($c) {
        return new \App\Controllers\ClienteController($c);
    };
    $container['CategoriaController'] = function ($c) {
        return new \App\Controllers\CategoriaController($c);
    };
    $container['TipoCategoriaController'] = function ($c) {
        return new \App\Controllers\TipoCategoriaController($c);
    };
};
