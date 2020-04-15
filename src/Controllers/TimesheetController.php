<?php

namespace App\Controllers;



class TimesheetController extends Controller
{
    private $registros = [
        [
            'fecha' => "15/05/2019",
            'dato1' => "",
            'dato2' => "",
            'liq' => 'Si'
        ],
        [
            'fecha' => "14/05/2019",
            'dato1' => "",
            'dato2' => "",
            'liq' => 'Si'
        ],
        [
            'fecha' => "13/05/2019",
            'dato1' => "",
            'dato2' => "",
            'liq' => 'Si'
        ],
        [
            'fecha' => "12/05/2019",
            'dato1' => "",
            'dato2' => "",
            'liq' => 'Si'
        ],
        [
            'fecha' => "11/05/2019",
            'dato1' => "",
            'dato2' => "",
            'liq' => 'Si'
        ],
        [
            'fecha' => "10/05/2019",
            'dato1' => "",
            'dato2' => "",
            'liq' => 'Si'
        ]
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Timesheet',
                'registros' => $this->registros

            ];
        return $this->view->render($response, 'timesheets/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Registro Actividades'];
        return $this->view->render($response, 'timesheets/create.html', $data);
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
