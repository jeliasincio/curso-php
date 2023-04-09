<?php

require "cado/ClaseProyecto.php";
require "cado/ClaseTrabajo.php";

$tiendaVirtual = new Proyecto();
$tiendaVirtual->nombre = "Tienda virtual pagos visa";
$tiendaVirtual->financio = "Estado";

echo "<pre>";
var_dump($tiendaVirtual);
echo "</pre>";


$programadorPHP = new Trabajo();
$programadorPHP->nombre = "Analista de sistemas PHP";

echo "<pre>";
var_dump($programadorPHP);
echo "</pre>";
