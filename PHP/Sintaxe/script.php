<!-- Isso é um comentário -->

<!doctype html>
<html lang="pt-BR">
<head>Primeiro código PHP com tags HTML</head>
<body>
 <h1>Título do texto</h1>
 <p>
    <?php
        echo "Olá, mundo";

        $var1 = 2 + 2;
        echo "O Resultado da soma é igual a: " . $var1; // O ponto final serve para concatenar strings

        // Isso é um comentário PHP
        /* Isso é um comentário multi-linhas em php */
    ?>
 </p>
</body>
</html>
