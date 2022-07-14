<?php

# Funções são blocos de código que vão somente ser executados assim que chamados.

function dizerOla($nome) {
    echo "Olá, $nome.<br>";
}

dizerOla('Caio');

/*
Nesse caso, mesmo que 'a' que já tivesse um valor já definido no parâmetro, ainda seria necessário
passar um valor para ele como argumento, se não, não seria possível assim adicionar um argumento para 'b'.
*/

function adicao($a, $b = 2) {
    echo $a + $b . '<br>';
}

adicao(10);
adicao(10, 10);

?>
