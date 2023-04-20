<?php

//ip cliente
$ip = $_SERVER['REMOTE_ADDR'];
//host
$host = $_SERVER['HTTP_HOST'];
//timestamp
$h = $_SERVER['REQUEST_TIME'];
$h = date('d-m-Y H:i:s', $h);
//método
$metodo = $_SERVER['REQUEST_METHOD'];
//cadena de consulta
$qs = $_SERVER['QUERY_STRING'];

echo <<<EXAMEN

<p>Esta petición viene de la dirección ip cliente $ip y trae en la cabecera Host el valor $host. La fecha y hora de la petición es <b> $h </b>.</p>
<p>Está usando el método http $metodo , y la cadena de consulta es <b>$qs</b></p>

EXAMEN;

?>