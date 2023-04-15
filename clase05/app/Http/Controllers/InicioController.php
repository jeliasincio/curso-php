<?php

namespace App\Http\Controllers;

use App\Models\Persona;

class InicioController extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }

    public function saludo()
    {
        $parametros_para_vista = [
            'usuario' => 'Jose Jose Jose',
            'edad' => 56,
            'frutas' => ['manzana', 'naranja', 'platano']
        ];
        return view('inicio.saludo', $parametros_para_vista); // resources/views/saludo.blade.php
        // resources/views/inicio/saludo.blade.php
    }

    public function usuario($usuario_id = 'ID no enviado', $departamento_id)
    {
        return "El id de usuario es " . $usuario_id;
    }

    public function respuestajson()
    {
        return response()->json(['manzana' => '', 'naranja'  => '', 'platano'  => '']);
    }

    public function personas()
    {
        // crear registros
        $leonard = new Persona();
        $leonard->apellido_paterno = "Canales";
        $leonard->apellido_materno = "León";
        $leonard->nombres = "Leonard";
        $leonard->fecha_nacimiento = "2000-01-01";
        $leonard->peso = 85.96;
        $leonard->dni = '74125869';
        $leonard->estado_civil = "Soltero";
        $leonard->save();
        return "Ruta para personas";
    }

    public function editarPersona($persona_id)
    {
        // buscar en la base de dato si existe el $id
        $leonard = Persona::find($persona_id);
        if (is_null($leonard)) {
            return "Persona no existe";
        } else {
            // YYYY-mm-dd
            // dd/mm/YYYY
            $leonard->fecha_nacimiento = '1998-01-02';
            $leonard->save();
        }
        return "Editar persona";
    }

    public function eliminarPersona($persona_id)
    {
        $leonard = Persona::find($persona_id);
        if (is_null($leonard)) {
            return "No se puede eliminar, no existe";
        } else {
            $leonard->delete();
        }
        return "Eliminado correctamente";
    }

    public function listarPersona()
    {
        $listado = Persona::all(); // todos

        $listado = Persona::where('apellido_paterno', '=', 'Chaname')
            ->where('apellido_materno', '=', 'Burga')
            ->orderBy('apellido_materno', 'DESC')
            ->get();
        return view('listarpersona', [
            'listado' => $listado
        ]);
    }
}
