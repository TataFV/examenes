function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        //document.getElementById("datos").innerHTML = this.responseText;
    }

    //INIT
    xhttp.open("GET", "https://api.chucknorris.io/jokes/random", true);


    xhttp.addEventListener('load', function () {
        console.log(this.responseText);
        muestraResultados(this.responseText);

    });

    //SEND
    xhttp.send();


}
loadDoc();


function muestraResultados(response) {
    //Guarda el objeto JSON en una variable
    const myArray = JSON.parse(response);
    console.log(myArray);

    //Cada vez que se carga la página se vacia el contenido de la etiqueta <div>
    var datos = document.getElementById("datos");
    datos.innerHTML = "";

    //Escribe el chiste y la fecha dentro de la etiqueta <p> y lo añade dentro del <div>
    var texto = document.createElement("p");
    //myArray.value es el chiste //myArray.updated_at es la fecha
    texto.textContent = "El texto " + myArray.value + "  se actualizó en la fecha " + myArray.updated_at + " .";
    datos.appendChild(texto);

    //Crea la etiqueta <a> y añade la url del chiste al atributo href 
    var link = document.createElement('a');
    link.textContent = myArray.value;
    link.href = myArray.url;
    datos.appendChild(link);
}
