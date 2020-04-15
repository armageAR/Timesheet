<?php

namespace App\Controllers;

class TripulanteController extends Controller
{
    private $tripulantes = [
        [
            'id' => 1,
            'persona' => [
                'id' => 7,
                'nombre' => "Mario Ramon",
                'apellido' => 'PEREZ CAÑADAS'
            ],
            'contrato' =>
            [
                'id' => 1,
                'numero' => 1234,
                'referencia' => "Contrato Oil",
                'cliente' => "Oil Petroleo",
                'tipoCategorias' => ['BA', 'BB']
            ],
            'centrocostos' => [
                'codigo' => 'BP01',
                'nombre' => "Barco Pepe"
            ],
            'fechaInicio' => "2018-04-10",
            'fechaFin' => "",
            'estado' => 1,

        ],
        [
            'id' => 2,
            'persona' => [
                'id' => 6,
                'nombre' => "Cristian",
                'apellido' => 'DOTREMONT',
            ],
            'contrato' =>
            [
                'id' => 2,
                'numero' => 5478,
                'referencia' => "Temporal",
                'cliente' => "Comañia del Sol SL",
                'tipoCategorias' => ['BA']
            ],
            'centrocostos' => [
                'codigo' => 'BURAY',
                'nombre' => "Buque el Rayo"
            ],
            'fechaInicio' => "2019-04-10",
            'fechaFin' => "",
            'estado' => 1,

        ],
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Tripulanes',
                'tripulantes' => $this->tripulantes

            ];
        return $this->view->render($response, 'tripulantes/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Tripulante'];
        return $this->view->render($response, 'tripulantes/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Tripulante', 'entity' => $this->tripulantes[$args['id']]];
        return $this->view->render($response, 'tripulantes/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Tripulante', 'entity' => $this->tripulantes[$args['id']]];
        return $this->view->render($response, 'tripulantes/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Desafectar Tripulante', 'entity' => $this->tripulantes[$args['id']]];
        return $this->view->render($response, 'tripulantes/delete.html', $data);
    }
}
