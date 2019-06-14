<?php

namespace App\Controllers;



class PersonaController extends Controller
{

    public function listar($request, $response)
    {
        return $this->view->render($response, 'personas/index.html');
    }

    public function crear($request, $response)
    {
        return $this->view->render($response, 'personas/create.html');
    }

    public function ver($request, $response)
    {
        return $this->view->render($response, 'personas/view.html');
    }

    public function modificar($request, $response)
    {
        return $this->view->render($response, 'personas/update.html');
    }

    public function eliminar($request, $response)
    {
        return $this->view->render($response, 'personas/delete.html');
    }
}
