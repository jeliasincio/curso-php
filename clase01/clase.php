<?php
echo '<pre>';
// variables
$nombre = "Juan";

var_dump($nombre);

//$nombre = 34;

//echo "<hr/>";

//var_dump($nombre);

// tipos de datos

$apellidos = 'Perez'; // string
var_dump($apellidos);

$edad = 50; // int
var_dump($edad);

$peso = 56.89; // float
var_dump($peso);

$es_mayor_edad = true; // boolean
var_dump($es_mayor_edad);

// diferencia entre uso de comillas simples y comillas dobles
$nombre_completo = $nombre . " " . $apellidos;
var_dump($nombre_completo);

$nombre_completo = "$nombre $apellidos";
var_dump($nombre_completo);

$nombre_completo = '$nombre $apellidos';
var_dump($nombre_completo);

// tipos  de datos compuestos
// arrays
$deportes_favoritos =  array('Fútbol', 'Natación', 'Ciclismo', 'Tenis', 345);
var_dump($deportes_favoritos);

$super_heroes = ['Ironman', 'Deadpool', 'Hulk'];
var_dump($super_heroes);

// arrays multi dimensionales
$persona =  ["Juan", 'Perez', 56, ['Matematica', 'Química', 'Lenguaje'], 67.56];
var_dump($persona);

// accediendo a elementos de un arrays

var_dump($deportes_favoritos[2]);
var_dump($deportes_favoritos[3]);
var_dump($persona[3][1]);

// arrays asociativos
$persona = [
    "nombre" => "Juan", 
    "apellidos" => 'Perez', 
    "edad" => 56, 
    "cursos" => [
        'Matematica', 
        'Química', 
        'Lenguaje'
    ], 
    "peso" => 67.56
];
var_dump($persona);
var_dump($persona['cursos'][1]);

// tipo de datos OBJETOS
class Alumno{
    public $apellidos;
    public $nombres;
}

$frank = new Alumno();
$miguel = new Alumno();

var_dump($frank);


echo '</pre>';