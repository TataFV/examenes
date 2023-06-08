
//Muestra un chiste aleatorio
function randomJoke() {

    const box = document.getElementById("container");
    let parrafo1 = document.createElement("p");
    let parrafo2 = document.createElement("p");
    let parrafo3 = document.createElement("p");

    let url = 'https://api.chucknorris.io/jokes/random';
    fetch(url)
        .then(response => {
            return response.json()
        })
        .then(data => {
            console.log(data);
            //Joke
            parrafo1.innerHTML = data.value;
            //Fecha de actualización
            parrafo2.innerHTML = "Fecha de Actualización: " + data.updated_at;
            //Categoria
            parrafo3.innerHTML = "Categorías: " + data.categories;
            box.appendChild(parrafo1);
            box.appendChild(parrafo2);
            box.appendChild(parrafo3);
        })

        .catch(err => console.log(err));

}


//Muestra una lista de todas las categorías disponibles
function categoriesJoke() {
    let list = document.getElementById("lista");
    let li = document.createElement("li");

    let url1 = 'https://api.chucknorris.io/jokes/categories';
    fetch(url1)
        .then(response => {
            return response.json()
        })
        .then(data => {
            console.log(data);

            li.innerHTML = "";
            var categories = data;

            // Recorre las categorías y va creando la lista y añadiendola dentro de la etiqueta <ol>
            for (var i = 0; i < categories.length; i++) {
                var categoria = categories[i];
                let li = document.createElement("li");
                li.innerHTML = categoria;
                list.appendChild(li);
            }
        })

        .catch(err => console.log(err));

}
//MuestrA un chiste aleatorio, de una búsqueda por un texto que se escribió en un campo del formulario
function searchJoke() {
    let button = document.getElementById("buscador");
    let query = document.getElementById("busqueda");
    let resultado = document.getElementById("resultado");

    let url = "https://api.chucknorris.io/jokes/search?query=";

    button.addEventListener("click", function () {
        //console.log(query.value);
        fetch(url + query.value)
            .then(response => {
                return response.json()
            })
            .then(data => {
                //Función de aleatoriedad. Devuelve un chiste aleatorio de entre todos los resultados obtenidos
                let num = Math.floor(Math.random() * data.total);
                //console.log(data.result[num].value);
                resultado.innerHTML = data.result[num].value;
            })
            .catch(err => console.log(err));

    });
}

randomJoke()
categoriesJoke()
searchJoke()
