<?php

require "./cado/ClaseCarro.php";
require "./cado/ClaseArea.php";

$ferrari = new Carro();
$ferrari -> placa = "AER-123";
echo $ferrari->arrancar();
echo "<br/>";
echo $ferrari->acelerar();

// 
echo "<br/>";
$circulo = new Areas();
$circulo->radio = 10;
echo $circulo->areaCircunferencia();
echo "<br/>";
$circulo->darValorPi(4);
echo "<br/>";
echo $circulo->areaCircunferencia();
