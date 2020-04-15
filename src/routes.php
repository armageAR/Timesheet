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
        $app->get('/listar', '\App\Controllers\PersonaController:listar')->setName('personas');
        $app->get('/crear', '\App\Controllers\PersonaController:crear')->setName('persona.crear');
        $app->get('/ver/{id}', '\App\Controllers\PersonaController:ver')->setName('persona.ver');
        $app->get('/modificar/{id}', '\App\Controllers\PersonaController:modificar')->setName('persona.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\PersonaController:eliminar')->setName('persona.eliminar');
    });
    $app->group('/clientes', function () use ($app) {
        $app->get('/listar', '\App\Controllers\ClienteController:listar')->setName('clientes');
        $app->get('/crear', '\App\Controllers\ClienteController:crear')->setName('cliente.crear');
        $app->get('/ver/{id}', '\App\Controllers\ClienteController:ver')->setName('cliente.ver');
        $app->get('/modificar/{id}', '\App\Controllers\ClienteController:modificar')->setName('cliente.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\ClienteController:eliminar')->setName('cliente.eliminar');
    });
    $app->group('/categorias', function () use ($app) {
        $app->get('/listar', '\App\Controllers\CategoriaController:listar')->setName('categorias');
        $app->get('/crear', '\App\Controllers\CategoriaController:crear')->setName('categoria.crear');
        $app->get('/ver/{id}', '\App\Controllers\CategoriaController:ver')->setName('categoria.ver');
        $app->get('/modificar/{id}', '\App\Controllers\CategoriaController:modificar')->setName('categoria.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\CategoriaController:eliminar')->setName('categoria.eliminar');
    });
    $app->group('/tipoCategorias', function () use ($app) {
        $app->get('/listar', '\App\Controllers\TipoCategoriaController:listar')->setName('tipoCategorias');
        $app->get('/crear', '\App\Controllers\TipoCategoriaController:crear')->setName('tipoCategoria.crear');
        $app->get('/ver/{id}', '\App\Controllers\TipoCategoriaController:ver')->setName('tipoCategoria.ver');
        $app->get('/modificar/{id}', '\App\Controllers\TipoCategoriaController:modificar')->setName('tipoCategoria.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\TipoCategoriaController:eliminar')->setName('tipoCategoria.eliminar');
    });
    $app->group('/actividades', function () use ($app) {
        $app->get('/listar', '\App\Controllers\ActividadController:listar')->setName('actividades');
        $app->get('/crear', '\App\Controllers\ActividadController:crear')->setName('actividad.crear');
        $app->get('/ver/{id}', '\App\Controllers\ActividadController:ver')->setName('actividad.ver');
        $app->get('/modificar/{id}', '\App\Controllers\ActividadController:modificar')->setName('actividad.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\ActividadController:eliminar')->setName('actividad.eliminar');
    });
    $app->group('/contratos', function () use ($app) {
        $app->get('/listar', '\App\Controllers\ContratoController:listar')->setName('contratos');
        $app->get('/crear', '\App\Controllers\ContratoController:crear')->setName('contrato.crear');
        $app->get('/ver/{id}', '\App\Controllers\ContratoController:ver')->setName('contrato.ver');
        $app->get('/modificar/{id}', '\App\Controllers\ContratoController:modificar')->setName('contrato.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\ContratoController:eliminar')->setName('contrato.eliminar');
        $app->get('/requerimientos/{id}', '\App\Controllers\ContratoController:requerimientos')->setName('contrato.requerimientos');
    });
    $app->group('/centrocostos', function () use ($app) {
        $app->get('/listar', '\App\Controllers\CentroCostosController:listar')->setName('centrocostos');
        $app->get('/crear', '\App\Controllers\CentroCostosController:crear')->setName('centrocostos.crear');
        $app->get('/ver/{id}', '\App\Controllers\CentroCostosController:ver')->setName('centrocostos.ver');
        $app->get('/modificar/{id}', '\App\Controllers\CentroCostosController:modificar')->setName('centrocostos.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\CentroCostosController:eliminar')->setName('centrocostos.eliminar');
    });
    $app->group('/tripulantes', function () use ($app) {
        $app->get('/listar', '\App\Controllers\TripulanteController:listar')->setName('tripulantes');
        $app->get('/crear', '\App\Controllers\TripulanteController:crear')->setName('tripulante.crear');
        $app->get('/ver/{id}', '\App\Controllers\TripulanteController:ver')->setName('tripulante.ver');
        $app->get('/modificar/{id}', '\App\Controllers\TripulanteController:modificar')->setName('tripulante.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\TripulanteController:eliminar')->setName('tripulante.eliminar');
    });
    $app->group('/grupos', function () use ($app) {
        $app->get('/listar', '\App\Controllers\GrupoController:listar')->setName('grupos');
        $app->get('/crear', '\App\Controllers\GrupoController:crear')->setName('grupo.crear');
        $app->get('/ver/{id}', '\App\Controllers\GrupoController:ver')->setName('grupo.ver');
        $app->get('/modificar/{id}', '\App\Controllers\GrupoController:modificar')->setName('grupo.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\GrupoController:eliminar')->setName('grupo.eliminar');
    });
    $app->group('/francos', function () use ($app) {
        $app->get('/listar', '\App\Controllers\FrancoController:listar')->setName('francos');
        $app->get('/ver/{id}', '\App\Controllers\FrancoController:ver')->setName('franco.ver');
        $app->get('/sumar/{id}', '\App\Controllers\FrancoController:sumar')->setName('franco.sumar');
        $app->get('/restar/{id}', '\App\Controllers\FrancoController:restar')->setName('franco.restar');
    });
    $app->group('/timesheet', function () use ($app) {
        $app->get('/listar', '\App\Controllers\TimesheetController:listar')->setName('timesheets');
        $app->get('/crear', '\App\Controllers\TimesheetController:crear')->setName('timesheet.crear');
        $app->get('/ver/{id}', '\App\Controllers\TimesheetController:ver')->setName('timesheet.ver');
        $app->get('/modificar/{id}', '\App\Controllers\TimesheetController:modificar')->setName('timesheet.modificar');
        $app->get('/eliminar/{id}', '\App\Controllers\TimesheetController:eliminar')->setName('timesheet.eliminar');
    });
};
