<?php

# Valendo ressaltar que: switch faz comparações utilizando '==', enquanto match utiliza '==='.

$nome = 'Caio';

$resposta = match($nome) {
    'Caio' => 'Sim, meu nome!',
    'ciao' => 'Sim, meu apelido!',
    'Gaius Küste' => 'Sim, meu nickname!',
    'GaiusKuste' => 'Sim, meu nickname simplificado!',
    default => 'Nenhuma das opções...'
};

echo "<br>$resposta";

?>
