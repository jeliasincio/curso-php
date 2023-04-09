<?php
echo '<pre>';
// condicionales
$edad =  17;
$sabe_conducir = false;

/*if($edad >= 18){
    echo "Puedes ingresar";
}else{
    echo "No puede ingresar por ser menor de edad";
}*/

if($edad >= 18):
    echo "Puedes ingresar";
else:
    echo "No puede ingresar por ser menor de edad";
endif;

echo "<hr/>";

if($edad >= 18 && $sabe_conducir == true){
    echo "Accedes a la licencia de conducir";
}else{
    echo "No accedes a la licencia de conducir";
}

echo "<hr/>";

if($edad >= 18 || $sabe_conducir == true){
    echo "Accedes a la licencia de conducir";
}else{
    echo "No accedes a la licencia de conducir";
}

echo "<hr/>";

$sabe_conducir = 1;

if($sabe_conducir === true){
    echo "Sabe conducir";
}else{
    echo "No Sabe conducir";
}

echo "<hr/>";
// switch

$deporte_favorito = 'Futbol';

if($deporte_favorito === 'Futbol'){
    echo "Futbolista destacado: Cristiano Ronaldo";
}else if($deporte_favorito === 'Basquet'){
    echo "Basquetbolista destacado: Lebron James";
}else if($deporte_favorito === 'Tenis'){
    echo "Tenista destacado: Rafael Nadal";
}else{
    echo "No encontramos deportista para este deporte";
}

echo "<hr/>";

switch($deporte_favorito){
    case 'Futbol':
        echo "Futbolista destacado: Cristiano Ronaldo";
        break;
    case 'Basquet':
        echo "Basquetbolista destacado: Lebron James";
        break;
    case 'Tenis':
        echo "Tenista destacado: Rafael Nadal";
        break;
    default:
        echo "No encontramos deportista para este deporte";
        break;
}


echo '</pre>';

