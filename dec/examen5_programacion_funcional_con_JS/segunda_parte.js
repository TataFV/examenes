//En la librería segunda_parte.js. Supongamos que tenemos el array a = [9, 17, 29, 13, 25, 52]. Resuelve los siguientes problemas:

//1. Devuelve un array con los mismos elementos de a pero multiplicados por 2

//Array
var a = [9, 17, 29, 13, 25, 52];

//Map: Crea un array nuevo, donde cada elemento nuevo es el resultado de una multiplicar * 2 sobre el elemento antiguo
var result = a.map(function (element, index) {
    return element * 2
});

console.log(result);

//2. Devuelve un array con los mismos elementos de a pero aplicandole la función f1. La función f1 le suma 4 al argumento de entrada

//Función f1 
function f1(argumento) {
    return argumento + 4;
}
//Array
var a = [9, 17, 29, 13, 25, 52];

//Map
var result = a.map(function (element, index) {
    return f1(element);
});

console.log(result);

//3. Devuelve un array con los valores menores de 20

//Array
var a = [9, 17, 29, 13, 25, 52];

//Filter: Crea un array nuevo con los elementos que cumplan una condición
//Condición : valores menores de 20
var menor20 = a.filter(function (element) {
    return element < 20;
});
console.log(menor20);

//4. Devuelve la suma de todos los números del array pero añadiendole 100. Es decir, no empieza en cero

var a = [9, 17, 29, 13, 25, 52];

//Valor inicial = 100
//Reduce: Genera un valor resultado de ejecutar una función sobre los elementos de un array
const initialValue = 100;
var suma = a.reduce(
    (accumulator, currentValue) => accumulator + currentValue,
    initialValue
);

console.log(suma);