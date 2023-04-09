<?php

require_once ("ElementoBase.php");

class Trabajo extends ElementoBase
{
    public $descripcion;
    public function calcularDiasTrabajados(){
        return $this->duracion_semanas * 4;
    }
}