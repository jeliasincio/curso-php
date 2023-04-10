<?php

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'clase04',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent(); //ELOQUENT es el ORM de Laravel

// Eliminar la tabla usuarios si existe y la vuelve a crear
$capsule::schema()->dropIfExists('usuarios');
// Creartabla usuarios
Capsule::schema()->create('usuarios',function($table){
    $table->id(); //'id', autoincrement, bigInteger, unsigned,primary key
    $table->string('email',50)->unique();
    $table->string('nombre',100);
    $table->string('celular',50)->nullable();
    $table->string('password'); //255
    $table->boolean('activo')->default(true);
    $table->date('fecha_registro');
});


echo "Tabla creada correctamente";
// use Sistema\Controllers\AuthController;
// use Sistema\Models\Alumno;
// use Sistema\Models\Usuario;

// $usuario = new Usuario();
// $mensaje = $usuario->login();
// echo "$mensaje<br/>";

// $alumno = new Alumno();
// $alumno->nombre = "José";
// $alumno->apellidos = "Elias Incio";
// echo $alumno->nombreCompleto()."<br/>";

// $auth = new AuthController();
// echo $auth->encriptarPassword();
// echo "<br/>";