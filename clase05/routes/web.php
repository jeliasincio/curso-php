<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [App\Http\Controllers\InicioController::class, 'inicio']);

Route::get("/saludo", [App\Http\Controllers\InicioController::class, 'saludo']);

Route::get("/usuario/editar/{usuario_id?}/{departamento_id?}", [App\Http\Controllers\InicioController::class, 'usuario']);

Route::get('/json', [App\Http\Controllers\InicioController::class, 'respuestajson']);

Route::get(
    '/persona/crear',
    [App\Http\Controllers\InicioController::class, 'personas']
);

Route::get(
    '/persona/editar/{persona_id}',
    [App\Http\Controllers\InicioController::class, 'editarPersona']
);

Route::get(
    '/persona/eliminar/{persona_id}',
    [App\Http\Controllers\InicioController::class, 'eliminarPersona']
);

Route::get(
    '/persona/listar',
    [App\Http\Controllers\InicioController::class, 'listarPersona']
);

// PROTOCOLO HTTP
// METODOS HTTP

// MUESTRO PAGINAS
// LISTO RESULTADOS
// metodo GET

// REGISTRO NUEVOS DATOS
// metodo POST

// ACTUALIZO DATOS
// metodo PUT/PATCH

// ELIMINAR DATOS
// metodo DELETE