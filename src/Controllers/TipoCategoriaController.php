<?php

namespace App\Controllers;



class TipoCategoriaController extends Controller
{
    private $tipoCategorias = [
        [
            'codigo' => "BARG",
            'nombre' => "Bandera Argentina",
        ],
        [
            'codigo' => "BBEL",
            'nombre' => "Bandera Belga",
        ]
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Tipo Categorias',
                'tipoCategorias' => $this->tipoCategorias

            ];
        return $this->view->render($response, 'tipoCategorias/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Tipo Categoria'];
        return $this->view->render($response, 'tipoCategorias/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Tipo Categoria', 'entity' => $this->tipoCategorias[$args['id']]];
        return $this->view->render($response, 'tipoCategorias/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Tipo Categoria', 'entity' => $this->tipoCategorias[$args['id']]];
        return $this->view->render($response, 'tipoCategorias/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Tipo Categoria', 'entity' => $this->tipoCategorias[$args['id']]];
        return $this->view->render($response, 'tipoCategorias/delete.html', $data);
    }
}
