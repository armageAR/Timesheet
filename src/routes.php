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
        $app->get('/ver', 'PersonaController:ver')->setName('persona.ver');
        $app->get('/modificar', 'PersonaController:modificar')->setName('persona.modificar');
        $app->get('/eliminar', 'PersonaController:eliminar')->setName('persona.eliminar');
    });



    $app->get('/admin/clientes', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'clientes/index.html');
    })->setName('clientes');
    $app->get('/admin/cliente-crear', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'clientes/create.html');
    })->setName('clientecrear');
    $app->get('/admin/cliente-ver', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'clientes/view.html');
    })->setName('clientever');
    $app->get('/admin/cliente-modificar', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'clientes/update.html');
    })->setName('clientemodificar');
    $app->get('/admin/cliente-eliminar', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'clientes/delete.html');
    })->setName('clienteeliminar');



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
