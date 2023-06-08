<?php

//
if (isset($_POST['direccion'])) {
    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de viajeros</title>
</head>
<body>
    <h2>Añadir Viajeros</h2>
    <!-- Formulario de envío --->
    <form method="POST">
        <label for="direccion">Direccion</label>
        <input type="text" placeholder="Dirección del viajero" name="direccion" required><br>
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
        <input type="date" placeholder="Fecha nacimiento" name="fechaNacimiento" required><br>
        <input type="submit" value="Añadir viajero">
    </form>
</body>
</html>