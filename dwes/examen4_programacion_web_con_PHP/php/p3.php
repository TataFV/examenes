<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizando la aplicacion</title>

<body>
    <!--------- FORMULARIO -------->
    <form action="p3.php" method="POST">
    <?php
        if(isset($_POST['borrar'])) {
            # Destruye la variable
            unset($_COOKIE['color']);
            # Borra la cookie
            setcookie("color", null, 0);
        }

        $color = null;

        # Si se selecciona un color se guarda en una variable y se crea la cookie
        if (isset($_POST["color"])) {
            $color = $_POST["color"];
            setcookie("color", $color, time() + 84600);
            $_COOKIE['color']= $color;
        }
        
        # Si existe la cookie se muestra un texto con el color favorito guardado
        if (isset($_COOKIE['color'])){
            $cookie = $_COOKIE['color'];
            echo '<p style="color:'.$cookie.'"> Tu color favorito es:' . $cookie. '</p>';
        
            echo '<button type="submit" name="borrar">Borrar</button>';
            
        } else {
            
            ?>
            
                <label for="favcolor">Selecciona tu color favorito</label>
                <input type="text" id="color" name="color" value="#ff0000"><br><br>
                <button type="submit">Guardar</button>
            
        <?php

        } 
    ?>
    </form>
</body>

</html>