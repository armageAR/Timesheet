<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'home.html');
    })->setName('home');



    $app->get('/admin/personas', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'personas/index.html');
    })->setName('personas');
    $app->get('/admin/persona-crear', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'personas/create.html');
    })->setName('personacrear');
    $app->get('/admin/persona-ver', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'personas/view.html');
    })->setName('personaver');
    $app->get('/admin/persona-modificar', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'personas/update.html');
    })->setName('personamodificar');
    $app->get('/admin/persona-eliminar', function (Request $request, Response $response, array $args) {
        return $this->view->render($response, 'personas/delete.html');
    })->setName('personaeliminar');




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
