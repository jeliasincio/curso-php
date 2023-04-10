<?php

namespace Sistema\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Usuario -> (convertir a snake_case) -> usuario -> 'usuarios'
    //TipoUsuario -> tipo_usuario
    //TipoUsuarioAlumno -> tipo_usuario_alumno

    protected $table = 'usuarios';
    public $timestamps = false;


    protected $email;
    protected $password;

    public function login() {
        return "Función de inicio de sesión";
    }

}