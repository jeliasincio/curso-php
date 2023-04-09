<?php
    require "Modelos/Trabajo.php";
    require "Modelos/Proyecto.php";

    //uso de estaticos
    echo "<br/>";
    echo Trabajo::$dias_por_semana=6;
    //Trabajo::obtenerDescripcion();
    
    echo "<br/>";

    $programador_php = new Trabajo();
    //sobreescritura
    $programador_php->titulo = "Programador php";
    $programador_php->duracion_semanas = 20;
    $programador_php->visible = true;
    $logros = [
        'Conectarse con web sockets',
        'Envío de emails masivos',
        'Desplegar mi aplicación en AWS'
    ];
    $programador_php->darlogros($logros);

    // sobre carga
    $programador_php->descripcion = "Descripción del trabajo";
 
    $dias_trabajados = $programador_php->calcularDiasTrabajados();    
    echo $dias_trabajados."<br/>";
    echo "Descripcion: ".$programador_php->obtenerDescripcion();
    echo "<br/>Descripcion sobre carga: ".$programador_php->descripcion;
    echo "<br/>Valor estático de trabajo: ".$programador_php::$dias_por_semana;


    $tienda_virtual = new Proyecto();
    $tienda_virtual->duracion_semanas = 20;
    
    echo "<br/>";
    echo $tienda_virtual->calcularDiasTrabajados();
    
    
    echo "<br/>Valor estático de proyecto: ".$tienda_virtual::$dias_por_semana;
    echo "<pre>";    
    //var_dump($programador_php);

    //var_dump($tienda_virtual);

    echo "</pre>";