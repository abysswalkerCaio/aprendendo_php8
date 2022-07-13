<?php

$valores = [1, 2, 3, 4, 5];
$nomes = ["Caio", "A2", "2B", "9S", "Pascal"];

echo "$valores[0]<br>";
echo "$nomes[2]<br>";

/*
$valores = [
    0 => 5
];
*/

echo "$valores[0]<br>";

# Podemos adicionar um novo número ao array apenas por não especificar um índice.

$valores[] = 6;
echo "$valores[5]<br>";

?>
