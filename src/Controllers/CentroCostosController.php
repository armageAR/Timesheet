<?php

namespace App\Controllers;



class CentroCostosController extends Controller
{
    private $centrocostos = [
        [
            'id' => 1,
            'codigo' => 'BP01',
            'nombre' => "Barco Pepe",
            'fechaInicio' => "2018-04-10",
            'fechaFin' => "",
            'pais' => 'Argentina',
            'tipo' => 'Navio'

        ],
        [
            'id' => 2,
            'codigo' => 'BURAY',
            'nombre' => "Buque el Rayo",
            'fechaInicio' => "2015-02-13",
            'fechaFin' => "",
            'pais' => 'Argentina',
            'tipo' => 'Navio'

        ],
        [
            'id' => 3,
            'codigo' => 'ARQ0012',
            'nombre' => "Buque Cito",
            'fechaInicio' => "2015-05-05",
            'fechaFin' => "",
            'pais' => 'Argentina',
            'tipo' => 'Navio'

        ],
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Centro de Costos',
                'centrocostos' => $this->centrocostos

            ];
        return $this->view->render($response, 'centrocostos/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Centro Costos'];
        return $this->view->render($response, 'centrocostos/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Centro Costos', 'entity' => $this->centrocostos[$args['id']]];
        return $this->view->render($response, 'centrocostos/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Centro Costos', 'entity' => $this->centrocostos[$args['id']]];
        return $this->view->render($response, 'centrocostos/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Categoria', 'entity' => $this->centrocostos[$args['id']]];
        return $this->view->render($response, 'centrocostos/delete.html', $data);
    }
}
