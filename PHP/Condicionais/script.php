<?php

 $var1 = 10;
 $var2 = 20;

 if($var1 > $var2){
	echo "$var1 é maior que $var2!";
 }elseif($var1 < $var2){
    echo "$var1 é menor que $var2!";
 }else{
    echo "$var1 e $var2 são iguais!";
 }

 /*
 Switch
 Com o switch temos uma série de verificações e, ao final, uma instrução padrão (default)
 a ser executada, caso nenhuma das condições seja verdadeira.*/
 $var1 = 10; 
 switch($var1){
	case 10:
		echo "var1 é igual a 10";
        break; 
	case 20:
		echo "var1 é igual a 20";
		break;
	default:
		echo "var1 não é igual a 10 e nem a 20";
		break;
 }


 /*
 PHP permite que sejam utilizadas formas alternativas das instruções vistas.
 Em linhas gerais, troca-se a chave de abertura por dois pontos e a de fechamento
 pela palavra reservada “end” seguida do nome da instrução.*/
 $var1 = 10;
 $var2 = 10;

 if($var1 > $var2):
	echo "$var1 é maior que $var2";
 elseif($var1 < $var2):
	echo "$var1 é menor que $var2";
 else:
	echo "$var1 e $var2 são iguais";
 endif;


 /*Outra sintaxe alternativa interessante presente no PHP é o operador ternário.
 Por meio dele é possível avaliar uma condição e atribuir um valor de acordo com a validação.*/
 $var1 = 10;
 $var2 = ($var1 >= 10) ? 11 : 9;
 echo $var2;

 /*
 Note que uma condição foi verificada dentro de parênteses.
 Caso verdadeira, após o sinal “?” é atribuído o valor “11”. Caso negativa,
 após o sinal “:” é atribuído o valor “9”.*/
