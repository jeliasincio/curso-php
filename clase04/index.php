<?php

require_once "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Sistema\Models\Usuario;
/*use Sistema\Controllers\AuthController;
use Sistema\Models\Alumno;
use Sistema\Models\Usuario;*/

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql', // pgsql, mssql, sqlite
    'host' => 'localhost',
    'database' => 'clase04',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '', // select * from cont_usuarios
]);

$capsule->setAsGlobal();

$capsule->bootEloquent(); // ELOQUENT es el ORM  de Laravel

// Capsule::schema()->dropIfExists('usuarios');

// Crear tabla usuarios
if (Capsule::schema()->hasTable('usuario')) {
    Capsule::schema()->create('usuarios', function ($table) {
        $table->id(); // 'id', autoincremente, bigInteger, unsigned, primary key
        $table->string('email', 50)->unique();
        $table->string('nombre', 100);
        $table->string('celular', 50)->nullable();
        $table->string('password'); // 255
        $table->boolean('activo')->default(true);
        $table->date('fecha_registro');
        $table->date('fecha_registro2');
    });
}
echo "Tabla creada correctamente";

echo "<hr>";

/*$usuario = new Usuario;
$usuario->email = 'jperez12@gmail.com';
$usuario->nombre = 'Juan perez';
$usuario->celular = '234234234';
$usuario->password = '234242423423';
$usuario->fecha_registro = '2020-10-01';
// INSERT INTO usuarios (email, nombre, celular, password, fecha_registro) VALUEs (...)
$usuario->save();*/

$usuarios = Usuario::all(); // retornar todos los resultados

$usuarios = Usuario::where('id', '>', 3)
    ->where('id', '<', 5)
    ->orderBy('nombre', 'ASC')
    ->orderBy('email', 'DESC')->get();

echo "<ul>";
foreach ($usuarios as $fila) {
    echo "<li>" . $fila->nombre . "</li>";
}
echo "</ul>";

// created_at => fecha y hora de registro
// updated_at => fecha y hora de la ultima modificacion

/*$usuario = new Usuario();
$mensaje = $usuario->login();
echo $mensaje;
echo "<br/>";

$alumno = new Alumno();
$alumno->nombre = 'Juan';
$alumno->apellidos = 'Perez';
echo $alumno->nombreCompleto();
echo "<br/>";

$auth = new AuthController();
echo $auth->encriptarPassword();*/