<?php

require "App/Modelos/Usuario.php";
require "Librerias/Moises/Modelos/Usuario.php";
require "Librerias/Raisa/Modelos/Usuario.php";

use App\Modelos\Usuario as UsuarioAutenticacion;
use Librerias\Raisa\Modelos\Usuario as UsuarioEncriptacion;
use Librerias\Moises\Modelos\Usuario as UsuarioPermisos;

$autenticacion = new UsuarioAutenticacion();
echo $autenticacion->login();
echo "<br/>";

$encriptacion = new UsuarioEncriptacion();
echo $encriptacion->encriptarClave();
echo "<br/>";

$permisos = new UsuarioPermisos();
echo "<pre>";
var_dump($permisos->menuUsuario());
echo "</pre>";

