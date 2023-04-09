<?php
class Areas{
    public $lado;
    public $base;
    public $baseMayor;
    public $altura;
    public $radio;
    protected $pi = 3.1415;

    function areaCuadrado(){
        $area = $this->lado **2;
        return $area;
    }

    function areaCircunferencia(){
        $area = $this->pi * ($this->radio **2);
        return $area;
    }

    function areaTriangulo(){
        $area = $this->base * $this->altura/2;
        return $area;
    }

    function areaParalelogramo(){
        $area = $this->base * $this->altura;
        return $area;
    }

    function areaTrapecio(){
        $area = (($this->base + $this->baseMayor)*$this->altura)/2;
        return $area;
    }

    //setPi  --->damos el valor a pi

    function darValorPi($valorPi){
        $this->pi = $valorPi;
    }

    //getPi --->obtenemos el valor a pi
    function obtenerPi(){
        return $this->pi;
    }
}
