<?php

// While (enquanto)
 $i = 2;
 while ($i <= 20) {
	echo $i;
	$i+=2;
	echo "\n";
 }

 /*Sintaxe alternativa*/
 $i = 2;
 while ($i <= 20):
	echo $i;
	$i+=2;
	echo "\n";
 endwhile;

 /*Esse laço é semelhante ao anterior, exceto pelo fato de que a verificação, aqui, é feita ao final.
 Com isso, todas as instruções do laço serão executadas pelo menos uma vez.*/
 $i = 2;
 do {
	echo $i;
	$i+=2;
	echo "\n";
 }while ($i <= 20);

 // For
 for ($i = 1; $i <= 20; $i++) {
	echo $i;
	echo "\n";
 }

 //Foreach
 $carros = Array("Fusca", "Monza", "Passat");

 foreach($carros as $carro){
	echo $carro;
	echo "\n";
 }

 for ($i = 0; $i < count($carros); $i++) {
	echo $carros[$i];
	echo "\n";
 }
 