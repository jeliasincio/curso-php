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

Route::get('/', [App\Http\Controllers\InicioController::class,'inicio']);

Route::get('saludo', [App\Http\Controllers\InicioController::class,'saludo']);

Route::get('/usuario/editar/{usuario_id?}/{departamento_id}', [App\Http\Controllers\InicioController::class,'usuario']);

Route::get('/json', [App\Http\Controllers\InicioController::class,'respuestajson']);

Route::get('/cursos', [App\Http\Controllers\InicioController::class,'cursos']);
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
