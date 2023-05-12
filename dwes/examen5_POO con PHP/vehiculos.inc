<?php

#Clase Vehículos
#Propiedades: matr y edad
#Metodos: ver() , actualizar_matricula() y ver_completo()

class Vehiculos{

    public function __construct(
        private string $matr,
        private int $edad,
    ) {

        $this->matr = $matr;
        $this->edad = $edad;
    }

#Método ver(). Que muestra «El vehículo con matrícula $matr tiene una antigüedad de $edad años»
    public function ver(){
     echo "El vehículo con matrícula ". $this->matr . " tiene una antiguedad de " . $this->edad . " años.";
  } 

#Método actualizar_matricula(). Para cambiar el nombre del vehiculo
    public function actualizar_matricula($matr){
    $this->matr = $matr;
    echo "Matrícula actualizada: " .$this->matr;
  }

#Método ver_completo(). Para ver el contenido completo de la instancia
    public function ver_completo(){
    var_dump($this);
  }
}
