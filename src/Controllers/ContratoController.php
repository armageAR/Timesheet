<?php

namespace App\Controllers;



class ContratoController extends Controller
{
    private $contratos = [
        [
            'id' => 1,
            'referencia' => "Contrato Oil",
            'cliente' => "Oil Petroleo",
            'fechaInicio' => "2018-04-10",
            'fechaFin' => "",
            'numCentroCostos' => 3,
            'centroCostos' => [
                'Buque 1', 'Buque 2', 'Proyecto A'
            ],
            'actividad' => ['EM', 'AO', 'AC']
        ], [
            'id' => 2,
            'referencia' => "Temporal",
            'cliente' => "Comañia del Sol SL",
            'fechaInicio' => "2017-05-11",
            'fechaFin' => "2022-05-11",
            'numCentroCostos' => 1,
            'centroCostos' => [
                'Buque Rayo'
            ],
            'actividad' => ['EM', 'FT', 'AC', 'SG']
        ],
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Contratos',
                'contratos' => $this->contratos

            ];
        return $this->view->render($response, 'contratos/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Contrato'];
        return $this->view->render($response, 'contratos/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Contrato', 'entity' => $this->contratos[$args['id']]];
        return $this->view->render($response, 'contratos/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Contrato', 'entity' => $this->contratos[$args['id']]];
        return $this->view->render($response, 'contratos/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Categoria', 'entity' => $this->contratos[$args['id']]];
        return $this->view->render($response, 'contratos/delete.html', $data);
    }
}
