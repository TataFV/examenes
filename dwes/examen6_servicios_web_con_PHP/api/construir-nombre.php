<?php 

//API que recibe un JSON con nombre y apellidos y devuelva un texto con el nombre completo

//Recibimos POST en crudo
$json = file_get_contents('php://input');

//Agrega el nombre completo en forma de Array
$nombreCompleto = json_decode( $json,true);

//echo array_values($nombreCompleto);
echo 'Tu nombre completo es ' . $nombreCompleto['nombre'] . ' ' . $nombreCompleto['apellidos'];

// En Curl: $ curl -s -X 'POST' http://127.0.0.1/examenes/dwes/examen6_servicios_web_con_PHP/api/construir-nombre -d '{"nombre":"Pepe","apellidos":"Garcia"}'
// Output: Tu nombre completo es Pepe Garcia

?>