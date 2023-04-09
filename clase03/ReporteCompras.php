<?php
require_once "Interfaces/iReporte.php";

class ReporteCompras implements iReporte
{
    public function titulo()
    {
        return "Reporte de compras";
    }

    public function logo()
    {
        return "https://logos/compras.png";
    }

    public function fechaGeneracion()
    {
        return "2023-04-08 23:26:00";
    }

    public function usuarioReporte()
    {
        return "usuario generado";
    }
}