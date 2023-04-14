<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class InicioController extends Controller
{
    public function inicio()
    {
        // función de php, HELPER -> view
        return view('welcome');
        // resources/views/welcome.blade.php

    }
    public function saludo()
    {
        $parametros_para_vista = [
            'nombre_usuario' => 'Elias Incio Edwin',
            'edad' => 39,
            'frutas' => ['manzana', 'platano', 'naranja']
        ];
        return view('inicio.saludo', $parametros_para_vista); //resources/views/inicio/saludo.blade.php

    }

    public function usuario($usuario_id="ID no enviado", $departamento_id)
    {
        return "El id de usuario es: ". $usuario_id;
    }

    public function respuestajson()
    {
        return response()->json(['manzana','platano','naranja']);
    }

    public function cursos(){
        return response()->json([
            'Programación'=>['PHP','Laravel','React','JavaScript','Sequelize'],
            'Matematicas'=>['Razonamiento Matemático','Algebra','Artimética', 'Geometría']
        ]);
    }
}
