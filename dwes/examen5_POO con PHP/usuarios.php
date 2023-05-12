
<?php 

function getDataUser(){
    return json_decode(file_get_contents(__DIR__.'/usuarios.json'),true);
}

function getDataByDni($dni){
    $datos = getDataUser();
    foreach ($datos as $dato) {
        if($dato['dni'] == $dni){
            return $dato;
        }
    }
    return null;
}

$datos = getDataUser();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Gestión de Usuarios</title>
    <link rel= "stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Lista de Usuarios en el almacén</h2>
    <div class="grid_layout">
        <?php foreach ($datos as $dato):?>
        <div class="user">
                <div><?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></div>
                <div><?php echo $dato['e-mail'] ?></div>
                <div><?php echo $dato['dni'] ?></div>   
        </div>
        <?php endforeach;; ?>
    </div>
    
    <h2>Datos de Usuario</h2>
    <div class="grid_layout_dni">
        
        <?php $dato = getDataByDni("36251823Z"); ?>
        <div id="user_dni">
                <div><?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></div>
                <div><?php echo $dato['e-mail'] ?></div>
                <div><?php echo $dato['dni'] ?></div>   
        </div>
    </div>
    
        
    

</body>
</html>