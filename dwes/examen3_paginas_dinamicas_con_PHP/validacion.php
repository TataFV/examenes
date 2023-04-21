<?php

//Provincia
if ($_POST['provincia'] == ''){
    echo "Falta la provincia";
    exit;
}

//Día
$day = $_POST['day'];

if ($day == "") {
    echo "Falta el día";
    exit;
}

if (!preg_match('/^\d{1,2}$/', $day)) {
    echo "Día tiene que ser un número";
    exit;
}

$day = intval($day);
if ($day > 31) {
    echo "No es un número de día válido";
    exit;
}

//Mes
if ($_POST['month'] == "") {
    echo "Falta el mes";
    exit;
}

//Año
$year = $_POST['year'];

if ($year == ""){
    echo "Falta el año";
    exit;
}

if (!preg_match('/^\d{1,4}$/', $year)) {
    echo "'Año' tiene que ser un número";
    exit;
}

$year = intval($year);
if ($year < 1900 || $year >2023) {
    echo "No es un número de año válido";
    exit;
}

//Tema de interés
if (!isset($_POST['topic'])){
    echo "Falta seleccionar algún tema de interés";
    exit;
}

//Archivo
if ($_POST['file'] == ""){
    echo "Falta selecionar un archivo";
    exit;
}

/*
$pronvincia = $day = $month  $year = $file = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $provincia = test_input($_POST["provincia"]);
    $day = test_input($_POST["day"]);
    $year = test_input($_POST["year"]);
    $file = test_input($_POST["file"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  */
  ?>

