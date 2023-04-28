
function revisar(texto) {

    var pista = "";
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        const provincias = JSON.parse(this.responseText);
        console.log(provincias.provincias);
        //document.getElementById("datos").innerHTML = this.responseText;
        for (i = 0; i < provincias.provincias.length; i++) {
            var provincia = provincias.provincias[i];

            if (provincia.toLowerCase().startsWith(texto.toLowerCase())) {
                pista += provincia + " ";
            }
        }

        document.getElementById("pista").innerHTML = pista;
    }

    //INIT
    xhttp.open("GET", "provincias.json", true);
    xhttp.send();

}

var input = document.getElementById("provincia");
input.addEventListener("keyup", function () {
    revisar(input.value);
});
