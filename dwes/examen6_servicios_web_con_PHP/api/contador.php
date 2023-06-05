<?php 

//API que devuelva el número de caracteres de una cadena de texto

/**Url semántica en función de los parámetros
Ejemplo
http://127.0.0.1/examenes/dwes/examen6_servicios_web_con_PHP/api/contador.php?string=pepe
Output: Número de caracteres: 4*/

$cadenaTexto = $_GET['string'];

$resultado = strlen($cadenaTexto);

echo 'Número de caracteres: '. $resultado;
?>