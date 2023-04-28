<?php
    session_name("usuario1");
    session_id("Firefox");
    #Inicia sesion
    session_start();

####### CONTADOR #######
    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
        $_SESSION['contador']= 1;
    }
####### CERRAR SESIÓN #######
    if (isset($_POST["cerrar"])){
        unset($_SESSION["usuario1"]);
        session_destroy();
    } else {

        $contador = $_SESSION['contador'];
        echo "Número de visitas: " . $contador;
?> 
        <!----- FORMULARIO ----->
        <form action="p4.php" method="POST">
            <button type="submit" name="cerrar">Cerrar sesión</button>
        </form>

<?php
    }