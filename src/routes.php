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
    $app->group('/categorias', function () use ($app) {
        $app->get('/listar', 'CategoriaController:listar')->setName('categorias');
        $app->get('/crear', 'CategoriaController:crear')->setName('categoria.crear');
        $app->get('/ver/{id}', 'CategoriaController:ver')->setName('categoria.ver');
        $app->get('/modificar/{id}', 'CategoriaController:modificar')->setName('categoria.modificar');
        $app->get('/eliminar/{id}', 'CategoriaController:eliminar')->setName('categoria.eliminar');
    });
    $app->group('/tipoCategorias', function () use ($app) {
        $app->get('/listar', 'TipoCategoriaController:listar')->setName('tipoCategorias');
        $app->get('/crear', 'TipoCategoriaController:crear')->setName('tipoCategoria.crear');
        $app->get('/ver/{id}', 'TipoCategoriaController:ver')->setName('tipoCategoria.ver');
        $app->get('/modificar/{id}', 'TipoCategoriaController:modificar')->setName('tipoCategoria.modificar');
        $app->get('/eliminar/{id}', 'TipoCategoriaController:eliminar')->setName('tipoCategoria.eliminar');
    });
};
