<?php

//Bucle que recorre el array $_SERVER 
foreach ($_SERVER as $parm => $value){  
    echo "$parm = '$value'<br>";
}

//nº de variables del array $_SERVER
echo "El array tiene " . count($_SERVER) . " variables.";
?>