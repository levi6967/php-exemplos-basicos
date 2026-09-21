<?php

// vetor (array simples) - "1 linha"
$frutas = ["maça", "banana", "uva"];

// exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "posição $indice: $fruta <br>";
}

//array (linhas e colunas)

$matriz = [
    ["maz=x verstapen", "oscar piastri", "lando norris"],
    ["charles leclerc", "lewis hamilton", "george russel"],
    ["fernando alonso", "carlos sainz", "gabriel bortoleto"]
];

echo "<br><br>";
echo "lista de pilotos de F1 (dica: o 1 é o mehlor.) <br><br>";
// exibindo valores na matriz
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";

    }
    echo "<br>";
}