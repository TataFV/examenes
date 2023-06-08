<?php

require_once('DBconnection.php');

    $db = new DBconnection();

    //Muestra todos los viajeros registrados
    echo "VIAJEROS";
    echo "<br />";
    $query = $db->query('SELECT * FROM viajero');

    while($filas = $query->fetchAll()){
        echo "<table><tr><th>ID</th><th>Direccion</th><th>Fecha</th></tr>";
        foreach ($filas as $fila) {
            echo "<tr><td>".$fila['id']."</td><td>".$fila['direccion']."</td><td>".$fila['fechanacimiento']."</td></tr>";
        }
        echo "</table>";
        echo "<br />";
    }
    //Muestra todos los viajes registrados
    echo "VIAJES";
    $query = $db->query('SELECT * FROM viaje');

    while($filas = $query->fetchAll()){
        echo "<table><tr><th>ID</th><th>ID viajero</th><th>ID origen</th><th>ID destino</th><th>Fecha salida</th><th>Fecha llegada</th></tr>";
        foreach ($filas as $fila) {  
            echo "<tr><td>".$fila['id']."</td><td>".$fila['idviajero']."</td><td>".$fila['idorigen']."</td><td>".$fila['iddestino']."</td><td>".$fila['fechasalida']."</td><td>".$fila['fechallegada']."</td></tr>";
        
        }
        echo "</table>";
        echo "<br />";
    }

    //¿Cuántos viajeros registrados hay?
    $query = $db->query('SELECT COUNT(*) FROM viajero');
  
    while($filas = $query->fetchAll()){
        echo $filas[0]['count'] . " viajeros";
        echo "<br />";
    }

    //¿Cuántos viajes registrados hay?
    $query = $db->query('SELECT COUNT(*) FROM viaje');

    $result = $query->fetch();
    echo $result['count'] . " viajes";
    echo "<br />";


    //¿Quien es el viajero de menor edad?
    $query = $db->query('SELECT MAX(fechaNacimiento) FROM viajero');

    while($filas = $query->fetchAll()){
        echo "El viajero más joven nació en " . $filas[0]['max'];
        echo "<br />";
    }

    //¿Cuántos viajes, según el origen de datos, hay?

    $query = $db->query('SELECT idOrigen, COUNT(*) FROM viaje GROUP BY idOrigen');

    while($filas = $query->fetchAll()){
        foreach ($filas as $fila) {
            echo "La ciudad con id " . $fila['idorigen'] . " tiene " . $fila['count'] . " viajes.";
            echo "<br>";
        }
        echo "<br />";
    }
?>