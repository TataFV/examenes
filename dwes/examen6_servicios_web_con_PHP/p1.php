<?php

//API Chuck Norris Jokes 

//Muestra un chiste aleatorio (chiste, la fecha de actualización y la categoría a la que pertenece)

$response = json_decode( file_get_contents('https://api.chucknorris.io/jokes/random'),true);
?>
    <p>Joke:</p>
    <p><?php var_dump($response) ?></p>
    <p><?php echo $response['value']; ?></p>
    <p><?php echo $response['created_at']; ?></p>
    <p><?php echo count($response['categories']); ?></p>

<?php
//Muestra una lista de todas las categorías disponibles

$categories = json_decode( file_get_contents('https://api.chucknorris.io/jokes/categories'),true);

?>

<ol>
<?php

foreach ($categories as $category) {

    $link = 'https://api.chucknorris.io/jokes/random?category=' . $category;
    $joke = json_decode( file_get_contents($link),true);
    ?>
    <li>
        <p> <a href="<?php echo $link; ?>"><?php echo $category; ?></a></p>
        <p><?php echo $joke['value']; ?></p>
    </li>

<?php
}

//Muestra un chiste aleatorio, de una búsqueda por un texto concreto

$response1 =json_decode( file_get_contents('https://api.chucknorris.io/jokes/search?query=spain'),true); 

foreach ($response1['result'] as $value) {
    echo ($value['value']);
    print("<br>");
}
?>
   
