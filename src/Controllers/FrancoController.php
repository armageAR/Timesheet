<?php

namespace App\Controllers;



class FrancoController extends Controller
{
    private $francos = [
        [
            'legajo' => 123,
            'nombre' => "Mario Ramon PEREZ CAÑADAS",
            'contrato' => "Contrato Oil",
            'francos' => '12'
        ],
        [
            'legajo' => 132,
            'nombre' => "Cristian DOTREMONT",
            'contrato' => "Contrato Oil",
            'francos' => '2'
        ],
        [
            'legajo' => 8547,
            'nombre' => "Jose Armada",
            'contrato' => "Contrato Oil",
            'francos' => '5'
        ],
        [
            'legajo' => 7845,
            'nombre' => "Ruben Rubio",
            'contrato' => "Extramuy",
            'francos' => '62'
        ],
        [
            'legajo' => 6958,
            'nombre' => "Armando Torres",
            'contrato' => "Extramuy",
            'francos' => '22'
        ],
        [
            'legajo' => 7845,
            'nombre' => "Ramiro Planes",
            'contrato' => "Extramuy",
            'francos' => '87'
        ]
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Francos',
                'francos' => $this->francos

            ];
        return $this->view->render($response, 'francos/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Franco'];
        return $this->view->render($response, 'francos/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Franco', 'entity' => $this->francos[$args['id']]];
        return $this->view->render($response, 'francos/view.html', $data);
    }

    public function sumar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Sumar Franco Manual', 'entity' => $this->francos[$args['id']]];
        return $this->view->render($response, 'francos/sumar.html', $data);
    }

    public function restar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Restar Franco Manual', 'entity' => $this->francos[$args['id']]];
        return $this->view->render($response, 'francos/restar.html', $data);
    }
}
