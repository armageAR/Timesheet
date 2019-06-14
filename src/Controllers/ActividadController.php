<?php

namespace App\Controllers;



class ActividadController extends Controller
{
    private $actividades = [
        [
            'codigo' => "EM",
            'nombre' => "EMBARCADO",
            'franco' => "0.8",
            'signo' => "1"
        ], [
            'codigo' => "AO",
            'nombre' => "A ÓRDENES",
            'franco' => "",
            'signo' => ""
        ], [
            'codigo' => "AC",
            'nombre' => "ACCIDENTADO",
            'franco' => "",
            'signo' => ""
        ], [
            'codigo' => "AA",
            'nombre' => "ACCIDENTADO ART",
            'franco' => "",
            'signo' => ""
        ], [
            'codigo' => "FR",
            'nombre' => "FRANCO",
            'franco' => "1",
            'signo' => "-1"
        ], [
            'codigo' => "FT",
            'nombre' => "FERIADO TRABAJADO",
            'franco' => "2",
            'signo' => "1"
        ], [
            'codigo' => "VC",
            'nombre' => "VACACIONES",
            'franco' => "",
            'signo' => ""
        ], [
            'codigo' => "SG",
            'nombre' => "LICENCIA SIN GOCE DE HABERES",
            'franco' => "",
            'signo' => ""
        ], [
            'codigo' => "X",
            'nombre' => "SIN RELACIÓN CON EL CENTRO DE COSTOS",
            'franco' => "",
            'signo' => ""
        ],
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Actividades',
                'actividades' => $this->actividades

            ];
        return $this->view->render($response, 'actividades/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Actividad'];
        return $this->view->render($response, 'actividades/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Actividad', 'entity' => $this->actividades[$args['id']]];
        return $this->view->render($response, 'actividades/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Actividad', 'entity' => $this->actividades[$args['id']]];
        return $this->view->render($response, 'actividades/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Categoria', 'entity' => $this->actividades[$args['id']]];
        return $this->view->render($response, 'actividades/delete.html', $data);
    }
}
