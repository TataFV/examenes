<?php

    include("validacion.php");
    
    echo "Datos recibidos <br />";
    echo "<br/>";

    if(isset($_POST['provincia'])){
        $provincia = $_POST['provincia'];
        echo "Provincia: " . $provincia . "<br />";
    }
   
    if(!empty( $_POST['day'])){
        $day= $_POST['day'];
    }

    $month= $_POST['month'];

    if(!empty( $_POST['year'])){
        $year= $_POST['year']; 
    }

    echo "Fecha de nacimiento: " . $day . " de " .  $month . " de " . $year .'<br>'; 

    $topics=$_POST['topic'];
    echo "Temas de interes: <br>";
    foreach ($topics as $topic){
        echo " - " . $topic . "<br />";
    }
    
        $file= $_POST['file'];
        echo "Nombre del archivo: " . $file . '<br>';

?>

