<?php

// definir clase
class Persona
{
    // definir atributos
    public $nombres;
    public $apellido_paterno;
    public $apellido_materno;
    protected $igv = 18;

    public function __construct($nombres, $apellidoPaterno, $apellidoMaterno)
    {
        $this->nombres = $nombres;
        $this->apellido_paterno = $apellidoPaterno;
        $this->apellido_materno = $apellidoMaterno;
    }

    // definir metodos
    public function nombreCompleto()
    {
        return $this->nombres . " " . $this->apellido_paterno . ' ' . $this->apellido_materno;
    }

    public function montoVenta($costo)
    {
        return $costo * ($this->igv / 100);
    }
}
