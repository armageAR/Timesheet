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
    $app->group('/actividades', function () use ($app) {
        $app->get('/listar', 'ActividadController:listar')->setName('actividades');
        $app->get('/crear', 'ActividadController:crear')->setName('actividad.crear');
        $app->get('/ver/{id}', 'ActividadController:ver')->setName('actividad.ver');
        $app->get('/modificar/{id}', 'ActividadController:modificar')->setName('actividad.modificar');
        $app->get('/eliminar/{id}', 'ActividadController:eliminar')->setName('actividad.eliminar');
    });
    $app->group('/contratos', function () use ($app) {
        $app->get('/listar', 'ContratoController:listar')->setName('contratos');
        $app->get('/crear', 'ContratoController:crear')->setName('contrato.crear');
        $app->get('/ver/{id}', 'ContratoController:ver')->setName('contrato.ver');
        $app->get('/modificar/{id}', 'ContratoController:modificar')->setName('contrato.modificar');
        $app->get('/eliminar/{id}', 'ContratoController:eliminar')->setName('contrato.eliminar');
    });
    $app->group('/centrocostos', function () use ($app) {
        $app->get('/listar', 'CentroCostosController:listar')->setName('centrocostos');
        $app->get('/crear', 'CentroCostosController:crear')->setName('centrocostos.crear');
        $app->get('/ver/{id}', 'CentroCostosController:ver')->setName('centrocostos.ver');
        $app->get('/modificar/{id}', 'CentroCostosController:modificar')->setName('centrocostos.modificar');
        $app->get('/eliminar/{id}', 'CentroCostosController:eliminar')->setName('centrocostos.eliminar');
    });
    $app->group('/tripulantes', function () use ($app) {
        $app->get('/listar', 'TripulanteController:listar')->setName('tripulantes');
        $app->get('/crear', 'TripulanteController:crear')->setName('tripulante.crear');
        $app->get('/ver/{id}', 'TripulanteController:ver')->setName('tripulante.ver');
        $app->get('/modificar/{id}', 'TripulanteController:modificar')->setName('tripulante.modificar');
        $app->get('/eliminar/{id}', 'TripulanteController:eliminar')->setName('tripulante.eliminar');
    });
    $app->group('/grupos', function () use ($app) {
        $app->get('/listar', 'GrupoController:listar')->setName('grupos');
        $app->get('/crear', 'GrupoController:crear')->setName('grupo.crear');
        $app->get('/ver/{id}', 'GrupoController:ver')->setName('grupo.ver');
        $app->get('/modificar/{id}', 'GrupoController:modificar')->setName('grupo.modificar');
        $app->get('/eliminar/{id}', 'GrupoController:eliminar')->setName('grupo.eliminar');
    });
};
