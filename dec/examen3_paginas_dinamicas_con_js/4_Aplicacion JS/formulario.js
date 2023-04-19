var nombreOk = false;
var edadOk = false;
var apellidosOk = false;
var provinciaOk = false;
var dniOk = false;


function validarNombre() {
    var nombre = document.getElementById("name").value;

    //El nombre sólo puede llevar caracteres latinos habituales. No se aceptan nombres compuesto (ni espacios ni guiones)
    if (/\s/.test(nombre) || /\d/.test(nombre)) {
        console.log("El nombre sólo puede llevar caracteres latinos habituales");
        nombreOk = false;
    } else {
        nombreOk = true;
    }
    comprobarValidez();
}

function validarEdad() {
    var edad = document.getElementById("age").value;

    //La edad ha de ser un número entero y de máximo 85 años
    //RegEx: los carácteres tienen que ser digitos
    if (/\d/.test(edad) && parseInt(edad) < 85) {
        edadOk = true;
    } else {
        edadOk = false;
    }
    comprobarValidez();
}

function validarProvincia() {
    var provincia = document.getElementById("provincia").value;

    //Array de provincias
    let provincias = ["A Coruña", "Lugo", "Ourense", "Pontevedra"];

    //Solo aceptamos registros de personas que vivan en una provincia gallega
    if (!provincias.includes(provincia)) {
        console.log("No es una provincia gallega");
        provinciaOk = false;
    } else {
        provinciaOk = true;
    }
    comprobarValidez();
}


function validarApellidos() {
    var apellidos = document.getElementById("apellidos").value;

    //Si hay apellidos, tendrán una longitud máxima de 40 caracteres.
    if (apellidos.length > 40) {
        console.log("La longitud máxima es de 40 caracteres");
        apellidosOk = false;
    } else {
        apellidosOk = true;
    }
    var mensaje = apellidos.length + "/40";
    document.getElementById("mensajeApellidos").innerHTML = mensaje;

    comprobarValidez();
}
function validarDni() {
    var dni = document.getElementById("dni").value;
    //Comprobueba si los caracteres introducidos se corresponden con la expresión regular establecida
    //RegEx: El 1º caracter es un digito, hay 8 digitos y luego un letra
    if (/^\d{8}[A-Z]$/.test(dni)) {
        dniOk = true;
    } else {
        dniOk = false;
        console.log("El DNI tiene 8 letras mayúsculas y una letra");
    }
    comprobarValidez();
}

////No permitirá enviar hasta que todos los campos son correctos (el botón enviar aparecerá desactivado)
function comprobarValidez() {
    if (nombreOk && apellidosOk && provinciaOk && edadOk && dniOk) {
        document.getElementById("button").disabled = false;
    } else {
        document.getElementById("button").disabled = true;
    }
}


var nombre = document.getElementById("name");
nombre.addEventListener("input", function () {
    validarNombre();
});

var edad = document.getElementById("age");
edad.addEventListener("input", function () {
    validarEdad();
});

var provincia = document.getElementById("provincia");
provincia.addEventListener("input", function () {
    validarProvincia();
});

var apellidos = document.getElementById("apellidos");
apellidos.addEventListener("input", function () {
    validarApellidos();
});

var dni = document.getElementById("dni");
dni.addEventListener("input", function () {
    validarDni();
});