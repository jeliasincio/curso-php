<?php

require_once ("ElementoBase.php");

class Proyecto extends ElementoBase
{
    public function calcularDiasTrabajados()
    {
        return $this->duracion_semanas * 6;
    }
}
