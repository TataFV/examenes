<?php
#Devuelve la cadena "Hola" y añade en la cabecera de respuesta el tipo MIME adecuado (text/plain)
    function Saludo($string){
        echo $string;
        header('Content-Type: text/plain');
    }

    Saludo("hola");
?>

