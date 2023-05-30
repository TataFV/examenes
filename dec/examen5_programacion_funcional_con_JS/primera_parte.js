//1. Define la función suma(n,m), que me devuelva la suma de esos dos números

function suma(n, m) {
    return n + m;
}

console.log(suma(100, 50));

//2. Defínela como función anónima y la asignas a la variable f1 y a la variable f2. ¿Qué valor da f1(3,4)? ¿Y f2(8,7)?

let f1 = f2 = function (num1, num2) {
    return num1 + num2;
};

console.log(f1(3, 4));
console.log(f2(8, 7));

//3. Crea una función calculadora(param1, param2, operación) donde operación será la función para operar los dos parámetros. Podrá ser una de estas tres funciones: suma, resta, multi (sobre dos parámetros)

function resta(n, m) {
    return n - m;
}

function multi(n, m) {
    return n * m;
}

//
function calculadora(param1, param2, operacion) {
    return operacion(param1, param2);
}

console.log(calculadora(10, 8, suma));
console.log(calculadora(10, 8, resta));
console.log(calculadora(10, 8, multi));

//4. Usa funciones flecha en el ejemplo de la calculadora de la sesión anterior

let suma = (param1, param2) => param1 + param2;
let resta = (param1, param2) => param1 - param2;
let multi = (param1, param2) => param1 * param2;

let calculadora = (param1, param2, operacion) => operacion(param1, param2);

console.log(calculadora(10, 8, suma));
console.log(calculadora(10, 8, resta));
console.log(calculadora(10, 8, multi));