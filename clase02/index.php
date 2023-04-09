<?php
// include_once, require_once
require_once "funciones.php";

echo "Esto si se esta ejecutando a  pesar de que no existe el archivo";
// function suma
$suma1 = sumar(5, 9);
echo $suma1;


require_once "funciones.php";

echo "<br/>";
// funcion calcular sueldo
$sueldoJuan = calcularSueldoSemanal(5, 20);

echo "El sueldo de juan es:" . $sueldoJuan;

echo "<br/>";
$sueldoMiguel = calcularSueldoSemanal(5);

echo "El sueldo de juan es:" . $sueldoMiguel;
