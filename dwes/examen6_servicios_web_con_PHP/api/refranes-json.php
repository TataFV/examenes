<?php 
//API  que devuelve tres refranes en un objeto JSON, con un campo extra que diga el orden: primero, seguro y tercero.

//Array de 10 refranes 
$refranesJson = [
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
$random1 = rand(0, count($refranesJson)-1);
$random2 = rand(0, count($refranesJson)-1);
$random3 = rand(0, count($refranesJson)-1);

//Guarda el resultado en un array asociativo
$resultado = [
    'primero' => $refranesJson[$random1],
    'segundo' => $refranesJson[$random2],
    'tercero' => $refranesJson[$random3]
];
//Convierte el array en un json y lo muestra
echo json_encode($resultado, JSON_UNESCAPED_UNICODE);

?>