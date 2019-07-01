<?php

namespace App\Controllers;

class GrupoController extends Controller
{
    private $grupos = [
        [
            'id' => 1,
            'name' => "Maersk",
            'description' => "Grupo Maersk",
            'active' => "1",
            'created_Date' => "2018-01-01",

        ],
        [
            'id' => 2,
            'name' => "MSC",
            'description' => "Grupo MSC",
            'active' => "1",
            'created_Date' => "2018-01-01",

        ],

    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Grupos',
                'grupos' => $this->grupos

            ];

        return $this->view->render($response, 'grupos/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Grupo'];
        return $this->view->render($response, 'grupos/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Grupo', 'entity' => $this->grupos[$args['id']]];
        return $this->view->render($response, 'grupos/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Grupo', 'entity' => $this->grupos[$args['id']]];
        return $this->view->render($response, 'grupos/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Grupo', 'entity' => $this->grupos[$args['id']]];
        return $this->view->render($response, 'grupos/delete.html', $data);
    }
}
