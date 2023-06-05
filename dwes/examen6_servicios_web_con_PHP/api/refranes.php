<?php 

//API de refranes españoles

//Array de 10 refranes españoles
$refranes = [
    'En boca cerrada no entran moscas',
    'El que ríe el último, ríe mejor',
    'El hábito no hace al monje',
    'A palabras necias, oídos sordos',
    'Tanto tienes, tanto vales',
    'No hay mal que dure cien años',
    'Querer es poder',
    'Barriga llena, corazón contento',
    'A cena de vino, desayuno de agua',
    'La cabra siempre tira al monte'
];

//Función que devuelve un refran aleatorio 
$random = rand(0,count($refranes)-1);

//Muestra un refran aleatorio
echo $refranes[$random];

?>