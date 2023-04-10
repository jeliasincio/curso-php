<?php

require_once "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Sistema\Models\Usuario;
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


//$capsule::schema()->dropIfExists('usuarios');

// Creartabla usuarios
if (Capsule::schema()->hasTable('usuario')) {
    Capsule::schema()->create('usuarios', function ($table) {
        $table->id(); //'id', autoincrement, bigInteger, unsigned,primary key
        $table->string('email', 50)->unique();
        $table->string('nombre', 100);
        $table->string('celular', 50)->nullable();
        $table->string('password'); //255
        $table->boolean('activo')->default(true);
        $table->date('fecha_registro');
    });
}
echo "Tabla creada correctamente";
echo "<br/>";

// $usuario = new Usuario;
// $usuario -> email = 'jelias4@gmail.com';
// $usuario -> nombre = 'José Edwin Elias Incio';
// $usuario -> celular = '967918380';
// $usuario -> password = '12345';
// $usuario -> fecha_registro = '2023-04-09';
// //INSERT INTO usuarios (email, nombre, celular, password, fecha_registro) VALUES(.....)

// $usuario->save();

$usuarios = Usuario::all(); // retornar todos los resultados

$usuarios = Usuario::where('id','>',2)
        ->where('id','<',5)
        ->orderBy('nombre','ASC')
        ->orderBy('email','DESC')->get();
echo "<ul>";
foreach( $usuarios as $fila){
    echo "<li>". $fila->nombre . "</li>";
}
echo "</ul>";

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