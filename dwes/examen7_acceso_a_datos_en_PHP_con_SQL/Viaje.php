<?php

#Clase Ciudad
#Propiedades: id, idOrigen, idDestino, fechaSalida, fechaLlegada

class Viaje{

    public function __construct(
        private int $id,
        private int $idViajero,
        private int $idOrigen,
        private int $idDestino,
        private DateTime $fechaSalida,
        private DateTime $fechaLlegada,
    ) {

        $this->id = $id;
        $this->idOrigen = $idOrigen;
        $this->idOrigen = $idDestino;
        $this->fechaSalida = $fechaSalida;
        $this->fechaLLegada = $fechaLLegada;

    }

    public function getId()
    {
        return $this->id;
    }
    public function getIdViajero()
    {
        return $this->idViajero;
    }
    public function getIdOrigen()
    {
        return $this->idOrigen;
    }

    public function getIdDestino()
    {
        return $this->idDestino;
    }
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }
    public function getFechallegada()
    {
        return $this->fechaLLegada;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function setId($idViajero)
    {
        $this->id = $idViajero;
    }
    public function setIdOrigen($idOrigen)
    {
        $this->idOrigen = $idOrigen;
    }
    public function setIdDestino($idDestino)
    {
        $this->idDestino = $idDestino;
    }
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;
    }
    public function setFechaLlegada($fechallegada)
    {
        $this->fechallegada = $fechallegada;
    }
}   
?>