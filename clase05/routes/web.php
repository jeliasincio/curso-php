<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // función de php, HELPER -> view
    return view('welcome');
    // resources/views/welcome.blade.php
});

Route::get('saludo',function(){
    $parametros_para_vista =[
        'nombre_usuario'=>'Elias Incio Edwin',
        'edad'=>39,
        'frutas'=>['manzana','platano','naranja']
    ];
    return view('inicio.saludo',$parametros_para_vista); //resources/views/inicio/saludo.blade.php
});
Route::get('/usuario/editar/{usuario_id?}',function($usuario_id="ID usuario no encontrado"){
    return "El id de usuario es: ". $usuario_id;
});

Route::get('/json',function(){
    return response()->json(['manzana','platano','naranja']);
});

Route::get('/cursos',function(){
    return response()->json([
        'Programación'=>['PHP','Laravel','React','JavaScript','Sequelize'],
        'Matematicas'=>['Razonamiento Matemático','Algebra','Artimética', 'Geometría']
    ]);
});
// PROTOCOLO HTTP
// METODOS HTTP

// MUESTRO PAGINAS
// LISTO RESULTADOS
//  metodo GET

// REGISTRO NUEVOS DATOS
// metodo POST

// ACTUALIZO DATOS
// metodo PUT/PATCH

// ELIMINO DATOS
// metodo DELETE
