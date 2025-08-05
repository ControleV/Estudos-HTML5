/*
Vetores são sequências de elementos de um mesmo tipo
No Java Script eles funcionam como listas
Podem ser definidos com colchete, ou com base na classe Array
*/

let cores1 = ['red', 'blue', 'green'];
let cores2 = new Array("red", "blue", "green");
let vazio1 = [];
let vazio2 = new Array();

/*
Acesso aos elementos através do índice
O primeiro índice tem valor zero
*/

console.log(cores1[2]); // Imprime green
document.getElementById("demo").style.color = cores2[1]; // Define fonte azul

/*
Vetor é uma array unidimensional
Matriz é um array multidimensional
*/


