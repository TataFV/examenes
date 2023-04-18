//Botón
var button = document.getElementById("boton");

//Cuando pulses el botón, el parrafo_1 cambiara el color de texto a azul.
button.addEventListener("click", () => {
    var parrafo1 = document.getElementById("parrafo_1");
    parrafo1.style.color = "blue";
});

//Cuando pases el ratón sobre el texto de parrafo_2, cambiará el color del texto de parrafo_1 a rojo.
var parrafo2 = document.getElementById("parrafo_2");
parrafo2.addEventListener("mouseover", (event) => {
    var parrafo1 = document.getElementById("parrafo_1");
    parrafo1.style.color = "red";
})