<?php

class Reporte
{
    protected $logo;
    protected $usuario;
    protected $titulo;
    protected $fecha;

    //aplicado el concepto de inyección de dependencias
    public function __construct(iReporte $reporte)
    {
        $this->logo = $reporte->logo();
        $this->titulo = $reporte->titulo();
        $this->usuario = $reporte->usuarioReporte();
        $this->fecha = $reporte->fechaGeneracion();
    }

    public function generar()
    {
        //obtener el logo
        //obtener usuario generador
        //obtener titulo
        //generar reporte y guardarlo, mostrarlo en el navegador, forzar su descarga
    }
}