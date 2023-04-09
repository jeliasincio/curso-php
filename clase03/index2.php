<?php

require_once "ReporteCompras.php";
require_once "ReporteVentas.php";
require_once "Reporte.php";

$reporteVentasJuan = new ReporteVentas();
$reporteVentasJose = new ReporteVentas();

$reporteComprasJuan = new ReporteCompras();
$reporteComprasJose = new ReporteCompras();

$reporte1 = new Reporte($reporteVentasJuan);
$reporte1 -> generar();

$reporte2 = new Reporte($reporteVentasJuan);
$reporte2 -> generar();

