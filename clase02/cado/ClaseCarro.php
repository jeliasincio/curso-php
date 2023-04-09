<?php

class Carro
{
    public $placa;
    public $color;
    public $numeroLlantas;
    public $colorLunas;
    public $velocidadMaxima;

    public function arrancar() {
        return "Auto con placa " . $this->placa . " ha arrancado";
    }

    public function acelerar() {
        return "Auto con placa " . $this->placa . " ha acelerado";
    }

    public function detener() {
        return "Auto con placa " . $this->placa . " se ha detendio";
    }
}
