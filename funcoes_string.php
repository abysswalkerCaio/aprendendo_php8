<?php

# Existem dezenas de funções para tratamentos de strings. Alguns exemplos abaixo:

$nome = 'Caio Henrique Souza Costa';

echo "$nome[0]<br>";
echo "$nome[10]<br>";

# Retorna o total de caracteres na string.
echo strlen($nome) . '<br>';

# Retorna o conteúdo da string a partir de um índice inicial até um índice final definidos.
echo substr($nome, 0, 10) . '<br>';

# Retorna todas as letras do conteúdo da string em letras maiúsculas.
echo strtoupper($nome) . '<br>';

# Retorna todas as letras do conteúdo da string em letras minúsculas.
echo strtolower($nome) . '<br>';

# Substitue todas da mesma letra selecionada por uma outra letra escolhida.
echo str_replace('a', 'x', $nome) . '<br>';

# Verifica qual a posição de um caractere dentro da string.
echo strpos($nome, 'a');

# Verifica se a string contém uma sequência de caracteres definida.
$avaliar = str_contains($nome, 'Souza'); //true

# Verifica se a string começa com uma sequência de caracteres defininda.
$avaliar = str_starts_with($nome, 'Caio'); //true

# Verifica se a string termina com uma sequẽncia de caracteres definida.
$avaliar = str_ends_with($nome, 'Costa'); //true

?>
