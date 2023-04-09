<?php

// while, for, do while foreach
echo "<pre>";
$ciudades = [
    'Lima',
    'Trujillo',
    'Chiclayo',
    'Piura',
    'Huancayo',
    'Tingo Maria',
    'Tarma',
    'Tarapoto',
    'Rioja',
    'Cerro de pasco',
    'Huaraz',
    'Chimbote',
    'Bagua',
    'Mancora'
];

var_dump($ciudades);

// var_dump($ciudades[12]);

$contador = 0;

$cantidad_de_elementos = count($ciudades); 

while($contador < $cantidad_de_elementos){
    echo $ciudades[$contador];
    echo "<br/>";
    // $contador = $contador + 1;
    $contador++;
}

echo "<hr/>";
// for
for($contador = 0; $contador < $cantidad_de_elementos; $contador++){
    echo $ciudades[$contador];
    echo "<br/>";
}

echo "<hr/>";
for($contador = $cantidad_de_elementos - 1; $contador >= 0; $contador--){
    echo $ciudades[$contador];
    echo "<br/>";
}

echo "<hr/>";
echo "<h1>Foreach</h1>";

$ciudades = array_reverse($ciudades);
// foreach
foreach($ciudades as $indice => $ciudad){
    echo $indice."-". $ciudad;
    echo "<br/>";
}







echo "</pre>";