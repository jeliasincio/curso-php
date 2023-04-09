<?php
require_once "./cado/ClasePersona.php";

//  definimos un objetos
$cristian = new Persona("Edwin", "Elias", "Incio");
// $cristian->igv = 20;

echo  $cristian->nombreCompleto();
echo "<br/>";
echo $cristian->montoVenta(100);
echo "<br/>";

$luisMiguel = new Persona("luis Miguel", "condori", "Lopez");

echo $luisMiguel->nombreCompleto();
echo "<br/>";
$vanessa =  new Persona("vanessa", "Orellana", "Rios");


echo $vanessa->nombreCompleto();
echo "<br/>";

// echo "<pre>";
// var_dump($cristian);
// var_dump($luisMiguel);
// var_dump($vanessa);
// echo "</pre>";
