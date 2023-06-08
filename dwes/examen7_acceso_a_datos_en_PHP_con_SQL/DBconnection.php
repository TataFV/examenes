<?php

class DBconnection {
    /**
     * Conexion a la base de datos 
     */
    private PDO $connection;
    private $equipo_BD="localhost";  // el nombre del equipo donde está la BD
    private $nombre_BD="Viajes";   // el nombre de la BD (recuerda que puede haber varias)
    private $usuario_BD="postgres"; // el usuario con permisos sobre esa BD
    private $password_BD="tatadb";   // la contraseña.

    function __construct(){
            //Si hay error de conexion
        try{

            $this->connection = new PDO("pgsql:host=".$this->equipo_BD.";port=5432;dbname=".$this->nombre_BD,
                $this->usuario_BD,
                $this->password_BD);
            //echo "La conexión fue bien";
        } catch(Exception $e){
            die("Falló la conexión con error: " . $e->getMessage());
        }
    }
    /**
     * Funcion que realiza las consultas a la base de datos
     */
    function query($sql){
        return $this->connection->query($sql);
    }
}
