<?php

# El tiempo en Vigo el 2022-07-15

$appid="f195d95d994b431e94c4bacffa59f199";

//Recibe como parámetro el nombre del archivo que se quiere leer y devuelve todo su contenido como un string

//API Key

$appid="f195d95d994b431e94c4bacffa59f199";
$response = json_decode( file_get_contents('https://api.openweathermap.org/data/2.5/weather?zip=36204,ES&appid=' . $appid . '&units=metric&lang=es'),true);
?>
    <h3>El tiempo hoy en <?php echo $response['name']; ?></h3>
    <?php // var_dump($response['weather']) ?> 
    
    <!-- El tiempo y humedad -->
    <p>Temperatura:<?php echo $response ['main']['temp']?> </p>
    <p>Humedad: <?php echo $response['main']['humidity']; ?> %</p>
    
    <!-- Presión Atmosférica y porcentaje de nubosidad -->   
    <p>Porcentaje nubosidad: <?php echo $response['clouds']['all']; ?> %</p>
    <p>Presión atmosférica: <?php echo $response['main']['pressure']; ?></p>

    <!-- Viento -->
    <p>Viento: <?php $viento = $response['wind']['speed']; $viento = $viento * 3600 / 1000; echo $viento; ?> km/h</p>

    <!-- Descripción --> 
    <p>Descripción: <?php echo $response['weather'][0]['description']; ?></p>

<?php

# El tiempo en Vigo el 2022-07-15

$date1 = "2022-07-15";
$timestamp1 = strtotime($date1);
//echo $timestamp1;

$response2 = json_decode(file_get_contents('http://history.openweathermap.org/data/2.5/history/city?id=3105976&type=hour&start='. $timestamp1 .'&appid=' . $appid . '&units=metric&lang=es&cnt=1'),true);
// print_r($response2);
?>
    <h3>El tiempo en <?php echo $response['name'] . ' el ' . $date1; ?></h3>

    <!-- El tiempo y humedad -->
    <p>Temperatura: <?php echo $response2['list'][0]['main']['temp']; ?></p>
    <p>Humedad: <?php echo $response2['list'][0]['main']['humidity']; ?> %</p>

    <!-- Presión Atmosférica y porcentaje de nubosidad -->    
    <p>Porcentaje nubosidad: <?php echo $response2['list'][0]['clouds']['all']; ?> %</p>
    <p>Presión atmosférica: <?php echo $response2['list'][0]['main']['pressure']; ?></p>
    <!-- Descripción --> 
    <p>Descripción: <?php echo $response2['list'][0]['weather'][0]['description']; ?></p> 