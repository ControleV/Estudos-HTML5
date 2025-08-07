<!DOCTYPE html>

<html>
    <body>
        <?php
            // Declarando um array vazio
            $carros = array();

            // Primeira forma de declaração e atribuição de valores
            $carros = Array("Fusca", "Monza", "Passat");

            // Segunda forma de declaração e atribuição de valores
            // Esta forma é semelhante à anterior, mas utilizando sintaxe similar a do Javascript
            $carros = ["Fusca", "Monza", "Passat"];

            // Terceira forma de declaração e atribuição de valores
            $carros[0] = "Fusca";
            $carros[1] = "Monza";
            $carros[2] = "Passat";

            // Quarta forma de declaração e atribuição de valores
            $carros[] = "Fusca";
            $carros[] = "Monza";
            $carros[] = "Passat";

            /*Os arrays anteriores são numéricos. Vejamos outros exemplos, agora com vetores associativos.
            Repare que a principal diferença é a utilização de strings no lugar de números para definir os seus índices.*/
            // Primeira forma
            $carros = array (
                'vw'        => "Fusca",
                'chevrolet' => "Monza",
                'fiat'      => "Tempra"
            );

            // Segunda forma
            $carros = [
                'vw'        => "Fusca",
                'chevrolet' => "Monza",
                'fiat'      => "Tempra"
            ];

            //Terceira forma
            $carros['vw']        = "Fusca";
            $carros['chevrolet'] = "Monza";
            $carros['fiat']      = "Tempra";


            $carros = array (
                'vw'        => "Fusca",
                0           => "Passat",
                'chevrolet' => "Monza",
                1           => "Chevette",
                'fiat'      => "Tempra",
                2           => "Uno"
            );
            print_r($carros);
            echo "O tamanho atual do array é: " . count($carros);
            echo "\n\n";
            //Definindo o valor do índice 0 como vazio
            $carros[0] = '';

            print_r($carros);
            echo "O tamanho atual do array é: " . count($carros);
            echo "\n\n";

            //Removendo dois elementos do array com unset
            unset($carros['fiat'], $carros[1]);

            print_r($carros);
            echo "O tamanho atual do array é: " . count($carros);
            echo "\n\n";

            //Removendo elementos do array com array_splice
            array_splice($carros, 1,2);

            print_r($carros);
            echo "O tamanho atual do array é: " . count($carros);

            // Arrays com mais de uma dimensão
            $frutas = array (
            "vermelhas" => array(
                "melancia",
                "cereja",
                "framboesa",
                "morango"
            ),

            "citricas" => array(
                "laranja",
                "limao",
                "abacaxi",
                "mexerica"
            ),
        );
        ?>
    </body>
</html>

