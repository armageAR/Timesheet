<?php

namespace App\Controllers;



class ClienteController extends Controller
{
    private $clientes = [
        [
            'id' => 1,
            'razonSocial' => "Oil Petroleo",
            'idFiscal' => "30-74325654-5",
            'nacionalidad' => "USA",
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'CABA',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'info@oilpetro.com.ar',
            'legajo' => '10145',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-25258147-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 2,
            'razonSocial' => "Comañia del Sol SL",
            'idFiscal' => "30-71165731-9",
            'nacionalidad' => "Chilena",
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Chile',
            'dirCiudad' => 'Vitacura',
            'dirEstado' => 'Santiago de Chile',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'info@oilpetro.com.ar',
            'legajo' => '10145',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-25258147-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 3,
            'razonSocial' => "Laguna Seca SA",
            'idFiscal' => "30-71488885-0",
            'nacionalidad' => "Argentina",
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'CABA',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'info@oilpetro.com.ar',
            'legajo' => '10145',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-25258147-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 4,
            'razonSocial' => "Terreno Virgen SA",
            'idFiscal' => "33-71252908-9",
            'nacionalidad' => "Española",
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'CABA',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'info@oilpetro.com.ar',
            'legajo' => '10145',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-25258147-3',
            'idioma' => 'Castellano'
        ]
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Clientes',
                'clientes' => $this->clientes

            ];
        return $this->view->render($response, 'clientes/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Cliente'];
        return $this->view->render($response, 'clientes/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Cliente', 'entity' => $this->clientes[$args['id']]];
        return $this->view->render($response, 'clientes/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Cliente', 'entity' => $this->clientes[$args['id']]];
        return $this->view->render($response, 'clientes/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Cliente', 'entity' => $this->clientes[$args['id']]];
        return $this->view->render($response, 'clientes/delete.html', $data);
    }
}
