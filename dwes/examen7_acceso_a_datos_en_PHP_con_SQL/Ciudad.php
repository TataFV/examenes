<?php

#Clase Ciudad
#Propiedades: id, nombre, numHabitantes y descripcion

class Ciudad{

    public function __construct(
        private int    $id,
        private string $nombre,
        private int    $numHabitantes,
        private string $descripcion
    ) {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->numHabitantes = $numHabitantes;
        $this->descripcion = $descripcion;

    }
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getNumHabitantes()
    {
        return $this->numHabitantes;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setNumHabitantes($numHabitantes)
    {
        $this->numHabitantes = $numHabitantes;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
?>