<?php 

//API que me devuelva el IMC de una persona 

/**Url semántica en función de los parámetros
Ejemplo
http://127.0.0.1/examenes/dwes/examen6_servicios_web_con_PHP/api/imc.php?nombre=pepe&peso=60&estatura=170
Output:pepe tu IMC es de 20.76*/

$nombre = $_GET['nombre'];
$peso = $_GET['peso'];
$estatura = $_GET['estatura'];


// convertimos cm en m
$estatura = $estatura / 100;
 
//formula peso(kg)/talla(m2)
$imc = $peso / ($estatura * $estatura);
 
//redondeamos a dos decimales
$imc = round($imc, 2);

echo "$nombre tu IMC es de $imc";
?>