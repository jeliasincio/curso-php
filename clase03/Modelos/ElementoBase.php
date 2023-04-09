<?php
class ElementoBase
{
    public $titulo = "Titulo";
    public $duracion_semanas;
    public $visible;
    public $logros;
    private $descripcion ="Valor protegido";
    public static $dias_por_semana = 7;

    public function __constructor(){

    }

    //setLogros
    public function darlogros($logros){
        $this->logros = $logros;
    }

    //getLogros --->obtenemos el valor de logros
    public function obtenerLogros(){
        return $this->logros;
    }

    public function calcularDiasTrabajados(){
        return $this->duracion_semanas * 7;
    }

    public function obtenerDescripcion(){
        return $this->descripcion;
    }
}