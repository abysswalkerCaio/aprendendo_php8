<?php

function buscarNumeros() {
    for ($i = 0; $i <= 10; $i++) {
        yield $i;
    }
}

foreach (buscarNumeros() as $numeros) {
    echo "$numeros ";
}

function buscarNomes() {
    yield '<br>Caio';
    yield 'Ryan';
    yield from ['A2', '2B', '9S'];
    yield 'Kai\'Sa';
}

foreach (buscarNomes() as $nomes) {
    echo "$nomes ";
}

?>
