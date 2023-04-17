//1.Creando objetos

//Crea un objeto que se llame Persona
//Propiedades: nombre, apellidos, dni, fecha de nacimiento y altura.
function Persona(nombre, apellidos, dni, fechaNacimiento, altura) {
    this.nombre = nombre;
    this.apellidos = apellidos;
    this.dni = dni;
    this.fechaNacimiento = fechaNacimiento;
    this.altura = altura;

    //Método de identificacion (quien_soy_yo)
    this.quien_soy_yo = function () {
        return 'Me llamo ' + this.nombre + ' y mi DNI es: ' + this.dni;
    }
    //Método edad:calcula la edad  
    this.edad = function () {
        var fechaNacimiento = new Date(this.fechaNacimiento);
        let hoy = new Date();
        let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();

        return ' Tengo ' + edad + ' años';
    }
}
//Instanciación de una persona
let marta = new Persona("Marta", "Fernández Villanueva", "36137870C", '03/19/1986', "158 cm.");
console.log(marta.quien_soy_yo());
console.log(marta.edad());

document.getElementById("persona").innerHTML = '¡Hola! ' + marta.quien_soy_yo() + '.<br> Nací el ' + marta.fechaNacimiento + ' . ' + marta.edad() + ' y mido ' + marta.altura;