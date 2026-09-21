<?php

//funçao simples com retorno
function somar(int $a, int $b): int {
    return $a + $b;
}

// exibindo o resultado
echo somar (4, 8);
echo "<br>";

// procedimento (função sem retorno)
function saudacao($nome = "aluno") {
    echo "olá $nome! Bem Vindo ao PHP. <br>";
}

//exibindo a saudação

saudacao();
saudacao("maria");

function mostrarlinha() {
    echo "---------------------------- <br>";
}
mostrarlinha();