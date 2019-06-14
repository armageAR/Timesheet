<?php

namespace App\Controllers;



class CategoriaController extends Controller
{
    private $categorias = [
        [
            'codigo' => "CAPUMGAS01",
            'detalle' => "CAPITÁN DE ULTRAMAR",
            'convenio' => "CCUOMM",
            'tipocate' => "Bandera Argentina"
        ],
        [
            'codigo' => "ENFROGAS01",
            'detalle' => "ENFERMERO",
            'convenio' => "CCUOMM",
            'tipocate' => "Bandera Argentina"
        ],
        [
            'codigo' => "CMAESGAS01",
            'detalle' => "CONTRAMAESTRE",
            'convenio' => "CCUOMM",
            'tipocate' => "Bandera Argentina"
        ],
        [
            'codigo' => "ELECTGAS01",
            'detalle' => "ELECTRICISTA",
            'convenio' => "CCUOMM",
            'tipocate' => "Bandera Argentina"
        ],
        [
            'codigo' => "TEROFBEL02",
            'detalle' => "3/O",
            'convenio' => "",
            'tipocate' => "Bandera Belga"
        ]
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Categorias',
                'categorias' => $this->categorias

            ];
        return $this->view->render($response, 'categorias/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Categoria'];
        return $this->view->render($response, 'categorias/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Categoria', 'entity' => $this->categorias[$args['id']]];
        return $this->view->render($response, 'categorias/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Categoria', 'entity' => $this->categorias[$args['id']]];
        return $this->view->render($response, 'categorias/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Categoria', 'entity' => $this->categorias[$args['id']]];
        return $this->view->render($response, 'categorias/delete.html', $data);
    }
}
