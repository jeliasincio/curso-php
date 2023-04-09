<?php

/**
 * Esta función sirve para sumar dos números
 */
function sumar(int $numero1, int $numero2)
{
    $suma = $numero1 + $numero2;
    return $suma;
}

/**
 * Esta function para  calcular sueldo semanal
 */
function calcularSueldoSemanal($diasTrabajados, $costoHora = 9)
{
    $sueldoSemanal = 8 * $diasTrabajados * $costoHora;
    return $sueldoSemanal;
}
