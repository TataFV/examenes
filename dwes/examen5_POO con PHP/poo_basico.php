<?php

include("vehiculos.inc");

#  Cree dos objetos (v1 y v2)
#. Muestre v1.ver() y v2.ver_completo()
#. Actualice la matrícula de v2
#. Muestre la matrícula de v2

#Vehículo 1
$v1 = new Vehiculos("00001111", 5);
$v1->ver();
echo "<br>";
$v1->actualizar_matricula("0000ZZZ");
echo "<br>";
$v1->ver_completo($v1);
echo "<br>";
echo "<br>";

#Vehículo 2
$v2 = new Vehiculos("00002222", 6);
$v2->ver();
echo "<br>";
$v2->actualizar_matricula("0000AAAA");
echo "<br>";
$v2->ver_completo($v2);
echo "<br>";
?>