<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;

    // PascalCase -> snake_case -> pluralizar
    // Persona -> persona -> 'personas'
    // TipoUsuario -> tipo_usuario -> tipo_usuarios

    protected $table = 'persona';
}