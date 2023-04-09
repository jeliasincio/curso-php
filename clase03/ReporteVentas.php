<?php

require_once "Interfaces/iReporte.php";

class ReporteVentas implements iReporte
{
    public function titulo()
    {
        return "Reporte de ventas";
    }

    public function logo()
    {
        return "unidadC/logos/ventas.png";
    }

    public function fechaGeneracion()
    {
        return "2023-04-08 23:23:00";
    }

    public function usuarioReporte()
    {
        return "usuario logeado";
    }
}