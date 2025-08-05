/*
Vetores são sequências de elementos de um mesmo tipo
No Java Script eles funcionam como listas
Podem ser definidos com colchete, ou com base na classe Array*/
let cores1 = ['red', 'blue', 'green'];
let cores2 = new Array("red", "blue", "green");
let vazio1 = [];
let vazio2 = new Array();

/*
Acesso aos elementos através do índice
O primeiro índice tem valor zero*/
console.log(cores1[2]); // Imprime green
document.getElementById("demo").style.color = cores2[1]; // Define fonte azul

/*
Vetor é uma array unidimensional
Matriz é um array multidimensional*/
var alunos = ['Alex', 'Anna', 'João']; // array de strings
alert(alunos[0]); // exibirá “Alex” na caixa de diálogo

/*
Para compreender em que situações o método push pode ser útil, vamos voltar a nosso vetor “alunos”.
Imagine que, após ter sido declarado inicialmente com 3 valores, seja necessário incluir novos valores
a esse array, em tempo de execução. O método push nos auxilia nessa tarefa.*/
nome_do_array.push(valor);

/*
Splice é um método multiuso em JavaScript que serve tanto para excluir elementos de um array,
como veremos a seguir, quanto para substituir e inserir.*/
Array.splice(posição,0,novo_elemento,novo_elemento);

/*
Em JavaScript, a remoção de elementos de um array pode ser feita com a utilização do método nativo delete.*/
delete frutas[0];

/*
Pop não recebe parâmetros, remove um elemento do final do array, atualizando seu tamanho.*/
frutas.pop();

/*
Embora seja similar ao pop, este método remove um elemento do início do array.
Após a remoção, este é reindexado, ou seja, o elemento de índice 1 passa a ser o de índice 0,
e assim sucessivamente. Além disso, o tamanho do array também é atualizado.*/
frutas.shift();
