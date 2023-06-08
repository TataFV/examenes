let numImagen = document.getElementById("numImagen");
let button = document.getElementById("buscador");

//Captura la busqueda realizada
let query = document.getElementById("busqueda");
let miniatura = document.getElementById("miniatura");


//Al hacer click con el botón
button.addEventListener("click", function () {
    //Captura el número de imagenes seleccionado
    console.log(numImagen.value);
    //Captura la busqueda del usuario
    console.log(query.value);

    //url + valor de la query + el numero de imagenes por página
    fetch('https://api.unsplash.com/search/photos?query=' + query.value + '&per_page=' + numImagen.value, {
        method: "GET",
        headers: {
            //Tipode contenido:img
            "Content-type": "image/jpeg",
            //API Key
            "Authorization": "Client-ID 3086hbsuUgEdh9p-8L_bYE0Qm7AHlta040q08Sa5hRk"
        }
    })  //La promesa devuelve una respuesta que se convierte a JSON
        .then(response => response.json())
        //Imprime los datos en la consola
        .then(function (response) {
            console.log(response);

            //Vacia el div que contiene las imagenes
            miniatura.innerHTML = "";

            // La respuesta es un Array  

            var imagenes = response.results;
            // Se recorre el array 
            for (var i = 0; i < imagenes.length; i++) {

                //Enlaces 
                var imagen = imagenes[i].urls.thumb;
                // Crea la etiqueta imagen
                var img = document.createElement("img");
                // Establece como valor del src la url obtenida  
                img.src = imagen;
                console.log(imagen);

                //Añade la imagen al div
                miniatura.appendChild(img);
            }

        })
        //Captura errores
        .catch(err => console.log(err));


});
