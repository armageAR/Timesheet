<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'home.html');
    })->setName('home');

    $app->group('/personas', function () use ($app) {
        $app->get('/listar', 'PersonaController:listar')->setName('personas');
        $app->get('/crear', 'PersonaController:crear')->setName('persona.crear');
        $app->get('/ver/{id}', 'PersonaController:ver')->setName('persona.ver');
        $app->get('/modificar/{id}', 'PersonaController:modificar')->setName('persona.modificar');
        $app->get('/eliminar/{id}', 'PersonaController:eliminar')->setName('persona.eliminar');
    });
    $app->group('/clientes', function () use ($app) {
        $app->get('/listar', 'ClienteController:listar')->setName('clientes');
        $app->get('/crear', 'ClienteController:crear')->setName('cliente.crear');
        $app->get('/ver/{id}', 'ClienteController:ver')->setName('cliente.ver');
        $app->get('/modificar/{id}', 'ClienteController:modificar')->setName('cliente.modificar');
        $app->get('/eliminar/{id}', 'ClienteController:eliminar')->setName('cliente.eliminar');
    });







    $app->get('/admin/categorias', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'categorias/index.html');
    })->setName('categorias');
    $app->get('/admin/categoria-crear', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'categorias/create.html');
    })->setName('categoriacrear');
    $app->get('/admin/categoria-ver', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'categorias/view.html');
    })->setName('categoriaver');
    $app->get('/admin/categoria-modificar', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'categorias/update.html');
    })->setName('categoriamodificar');
    $app->get('/admin/categoria-eliminar', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'categorias/delete.html');
    })->setName('categoriaeliminar');
};
