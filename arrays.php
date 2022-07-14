<?php

$valores = [1, 2, 3, 4, 5];
$nomes = ['Caio', 'A2', '2B', '9S', 'Pascal'];

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

# É possível criar um array misto, com índices númericos e strings.

$misto = [
    0 => 1,
    1 => 2,
    'nome' => 'Caio',
    'apelido' => 'ciao'
];

# É possível a declaração de arrays multidimensionais, ou seja, arrays que possuem linhas e colunas.

$multidimensional = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15]
];

echo $multidimensional[0][0] . '<br>';
echo $multidimensional[2][4] . '<br><br>';

# E a criação de arrays multidimensionais associativos.

$paises = [
    'Canadá' => ['Quebec', 'Toronto', 'Vancouver'],
    'Brasil' => ['São Vicente', 'Santos', 'São Paulo']
];

echo $paises['Canadá'][0] . '<br>';
echo $paises['Canadá'][1] . '<br>';
echo $paises['Canadá'][2] . '<br><br>';

echo $paises['Brasil'][0] . '<br>';
echo $paises['Brasil'][1] . '<br>';
echo $paises['Brasil'][2] . '<br>';

?>
