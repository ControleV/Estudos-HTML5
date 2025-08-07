<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('PORT', '5432');
define('DBNAME', 'test');
define('USER', 'user');
define('PASSWORD', 'psswd');

try {
	$dsn = new PDO(
		"mysql:host=". HOST . 
		";port=".PORT.";dbname=" . DBNAME .
		";user=" . USER .
		";password=" . PASSWORD,
		array(PDO::ATTR_PERSISTENT => true) //Essa linha faz com que a conexão seja permanente
	);

} catch (PDOException $e) {
	echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' .$e->getMessage();
}

$dsn = null; // O encerramento da conexão aberta
?>
