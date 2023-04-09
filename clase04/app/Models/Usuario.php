<?php

namespace Sistema\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Usuario -> (convertir a snake_case) -> usuario -> 'usuarios'
    // TipoUsuario -> tipo_usuario -> tipo_usuarios
    // TipoUsuarioAlumno-> tipo_usuario_alumno

    protected $table = 'usuarios';
    public $timestamps = false;

    // protected $email;
    // protected $password;

    public function login()
    {
        return "Funcion de inicio de sesion";
    }
}
