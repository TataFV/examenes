<?php


#Clase Viajero
#Propiedades: id, direccion y fecha de nacimiento

class Viajero{

    public function __construct(
        private int    $id,
        private string $direccion,
        private DateTime $fechaNacimiento,
    ) {

        $this->id = $id;
        $this->direccion = $direccion;
        $this->fechaNacimiento = $fechaNacimiento;

      }

        public function getId()
        {
            return $this->id;
        }
        public function getDireccion()
        {
            return $this->direccion;
        }
        public function getFechaNacimiento()
        {
            return $this->fechaNacimiento;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        public function setDireccion($direccion)
        {
            $this->direccion = $direccion;
        }
        public function setFechaNacimiento($fechaNacimiento)
        {
            $this->fechaNacimiento = $fechaNacimiento;
        }
    }

?>