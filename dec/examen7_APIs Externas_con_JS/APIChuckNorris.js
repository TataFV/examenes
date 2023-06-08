let button = document.getElementById("boton");
let hide = document.getElementById("oculta");
let p = document.getElementById("chuck");
/*
const box = document.getElementById("container");
let parrafo1 = document.createElement("p");
let parrafo2 = document.createElement("p");
let parrafo3 = document.createElement("p");
*/
button.addEventListener("click", function () {
    randomJoke()
});
oculta.addEventListener("click", function () {

    p.style.display = (p.style.display == 'none') ? 'block' : 'none';
});

//Muestra un chiste aleatorio
function randomJoke() {

    let url = 'https://api.chucknorris.io/jokes/random';
    fetch(url)
        .then(response => {
            var contentType = response.headers.get("content-type")
            p.innerHTML = contentType;
            p.style.display = 'block';
            console.log(response);
        })
        .catch(err => console.log(err));

}
