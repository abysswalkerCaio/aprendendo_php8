<?php

# Funções anônimas são funções sem nome e que precisam ser atribuídas a uma variável.

$a = function() {
    echo 'Função atribuída a variável de nome a.';
};

$a();

$b = function() {
    echo '<br>Olá, meu nome é';
};

function complementar($message, $name = 'Caio') {
    echo " $name.";
    return $message;
}

complementar($b());

?>
