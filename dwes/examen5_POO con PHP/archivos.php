<?php
#Muestra el nombre y ruta del archivo
$file_full = 'C:\xampp\htdocs\www\htdocs\examenes\dwes\examen5_POO con PHP\ejemplo.txt';
$path_parts = pathinfo($file_full);
$filename = $path_parts['basename'];

echo "Ruta del archivo: " . $path_parts['dirname'] . "\n <br>";
echo "Nombre del archivo: " . $path_parts['filename']. "\n <br>";

#Detecta si el archivo existe (si lo borro, dirá que no existe)
if (file_exists($filename)){
    echo "El fichero $filename existe" . "<br>";
} else {
    echo "El fichero $filename no existe" . "<br>";
}

#Carga el archivo en una variable
$content = file_get_contents($filename);
echo $content;

#Crea un array con 4 elementos y los escribes, línea a línea en el archivo. Sobreescribes lo que había
$array = ["Juan","Pedro","Lucas","Lucía"];
$file = fopen("ejemplo.txt", "w");

foreach ($array as $value){
    fputs($file, $value . " \n");  
}
echo "<br>";
echo "El fichero se ha sobreescrito el fichero corrrectamente.";
echo "<br>";
fclose($file);


#Lee la primera línea de un archivo csv de ejemplo, y crea un array con cada elemento (que va separado por comas)
$datos = fopen('addresses.csv', "r");

$linea = fgets($datos);
$elementos = explode(",", $linea); 

print_r($elementos);

fclose($datos);