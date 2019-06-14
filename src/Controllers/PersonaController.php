<?php

namespace App\Controllers;



class PersonaController extends Controller
{
    private $personas = [
        [
            'id' => 1,
            'nombre' => "Daniel",
            'apellido' => "GONZALEZ",
            'nacionalidad' => "Argentina",
            'docNumero' => "14154235",
            'docTipo' => 'DNI',
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'Buenos Aires',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'danielgonzalez@gmail.com',
            'legajo' => '10045',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-14154235-3',
            'idioma' => 'Castellano'
        ], [
            'id' => 2,
            'nombre' => "Eduardo",
            'apellido' => "POODTS",
            'nacionalidad' => "Paraguaya",
            'docNumero' => "11546987",
            'docTipo' => 'DNI',
            'dirCalle' => 'Mitre',
            'dirNumero' => '25',
            'dirUnidad' => '--',
            'dirPiso' => '--',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Gral Areas',
            'dirEstado' => 'Chubut',
            'dirCodigoPostal' => '1706',
            'telefono' => '221 424-847',
            'email' => 'edu@gmail.com',
            'legajo' => '10039',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-11546987-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 3,
            'nombre' => "Guillermo Federico",
            'apellido' => 'NAUMANN',
            'nacionalidad' => "Argentina",
            'docNumero' => "25456789",
            'docTipo' => 'DNI',
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'Buenos Aires',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'jajja@gmail.com',
            'legajo' => '10065',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-25456789-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 4,
            'nombre' => "German Antonio",
            'apellido' => 'RUIZ',
            'nacionalidad' => "Argentina",
            'docNumero' => "25258147",
            'docTipo' => 'DNI',
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'CABA',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'jajja@gmail.com',
            'legajo' => '10145',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-25258147-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 5,
            'nombre' => "Martin",
            'apellido' => 'CARO',
            'nacionalidad' => "Argentina",
            'docNumero' => "10254789",
            'docTipo' => 'DNI',
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'CABA',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'jajja@gmail.com',
            'legajo' => '10235',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-10254789-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 6,
            'nombre' => "Cristian",
            'apellido' => 'DOTREMONT',
            'nacionalidad' => "Argentina",
            'docNumero' => "12345658",
            'docTipo' => 'DNI',
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'Buenos Aires',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'jajja@gmail.com',
            'legajo' => '10011',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-12345658-3',
            'idioma' => 'Castellano'
        ],
        [
            'id' => 7,
            'nombre' => "Mario Ramon",
            'apellido' => 'PEREZ CAÑADAS',
            'nacionalidad' => "Argentina",
            'docNumero' => "11546987",
            'docTipo' => 'DNI',
            'dirCalle' => 'Buen Viaje',
            'dirNumero' => '2345',
            'dirUnidad' => 'C',
            'dirPiso' => '2',
            'dirPais' => 'Argentina',
            'dirCiudad' => 'Moron',
            'dirEstado' => 'Buenos Aires',
            'dirCodigoPostal' => '1706',
            'telefono' => '11 4624-8547',
            'email' => 'jajja@gmail.com',
            'legajo' => '10555',
            'fiscalTipo' => 'CUIL',
            'fiscalNumero' => '20-11546987-3',
            'idioma' => 'Castellano'
        ]
    ];

    public function listar($request, $response)
    {
        $data =
            [
                'titulo' => 'Personas',
                'personas' => $this->personas

            ];
        return $this->view->render($response, 'personas/index.html', $data);
    }

    public function crear($request, $response)
    {
        $data = ['titulo' => 'Crear Persona'];
        return $this->view->render($response, 'personas/create.html', $data);
    }

    public function ver($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Mostrar Persona', 'entity' => $this->personas[$args['id']]];
        return $this->view->render($response, 'personas/view.html', $data);
    }

    public function modificar($request, $response, $args)
    {
        $data = ['state' => 'enabled', 'titulo' => 'Modificar Persona', 'entity' => $this->personas[$args['id']]];
        return $this->view->render($response, 'personas/update.html', $data);
    }

    public function eliminar($request, $response, $args)
    {
        $data = ['state' => 'disabled', 'titulo' => 'Eliminar Persona', 'entity' => $this->personas[$args['id']]];
        return $this->view->render($response, 'personas/delete.html', $data);
    }
}
