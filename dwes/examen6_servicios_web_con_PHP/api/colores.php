<?php 
//API que devuelve un color aleatorio de una lista previa

//Array de colores
$rgbColors = [
    'red',
    'green',
    'blue'
];

//Función que devuelve un color aleatorio 
$random = rand(0,count($rgbColors)-1);

echo $rgbColors[$random];

?>