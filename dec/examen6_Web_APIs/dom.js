
const list = document.querySelector("ul#lista");
const input = document.querySelector('input#task');
input.addEventListener("input", function () {
    validarTask(input);
});
const button = document.querySelector('button#boton');

//La tarea sólo puede llevar caracteres latinos habituales. No se aceptan nombres compuesto (ni espacios ni guiones)
function validarTask(input) {
    let myTask = input.value;

    //Si el input incluye caracteres no habituales y no son entre 1 y 100. 
    if (!/^\w{1,100}$/.test(myTask)) {
        console.log("Las tareas sólo puede llevar caracteres latinos habituales");

        //Elimina el último caracter introducido
        myTask = myTask.substring(0, myTask.length - 1);
        console.log(myTask);
        //Muestra el valor inicial del input
        input.value = myTask;
    }
}

button.addEventListener('click', () => {

    let myTask = input.value;

    if (myTask !== '') {

        //Nº de elementos de la lista
        var largo = list.getElementsByTagName("li").length;
        //Si el nº de elementos es menor de 10 
        if (largo < 10) {
            console.log(largo);

            input.value = '';

            const listTask = document.createElement('li');
            const listText = document.createElement('span');
            const listBtn = document.createElement('button');

            //Margen de 10 pixeles entre la etiqueta <span> y la etiqueta <button>
            listText.style.marginRight = "10px";

            //Añade una etiqueta <span> dentro de la etiqueta <li>
            listTask.appendChild(listText);
            //Escribe el valor del input en la etiqueta <li>  
            listText.textContent = myTask;
            //Añade al final el botón
            listTask.appendChild(listBtn);
            //Escribe el texto "terminado" en el botón
            listBtn.textContent = 'Terminado';
            //Añade la tarea a la lista
            list.appendChild(listTask);

            //Al pulsar el botón se tacha el elemento de la lista    
            listBtn.addEventListener('click', () => {
                listTask.style.textDecoration = "line-through";

            });

        } else {
            //Añade un mensaje en la etiqueta <p> vacia
            const mensaje = document.getElementById('stop');
            mensaje.textContent = 'Hay 10 elementos en la lista.';
        }

        input.focus();
    }
});

