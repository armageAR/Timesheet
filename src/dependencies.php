<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $container['view'] = function ($c) {
        $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', ['cache' => false]);
        $view->addExtension(new \Slim\Views\TwigExtension(
            $c->router,
            $c->request->getUri()
        ));
        return $view;
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
    $container['ActividadController'] = function ($c) {
        return new \App\Controllers\ActividadController($c);
    };
    $container['ContratoController'] = function ($c) {
        return new \App\Controllers\ContratoController($c);
    };
    $container['CentroCostosController'] = function ($c) {
        return new \App\Controllers\CentroCostosController($c);
    };
    $container['TripulanteController'] = function ($c) {
        return new \App\Controllers\TripulanteController($c);
    };
    $container['GrupoController'] = function ($c) {
        return new \App\Controllers\GrupoController($c);
    };
};
