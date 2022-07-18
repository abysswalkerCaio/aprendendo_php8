<?php

class Exemplo {
    private $nome = 'x';

    function setPrivate($objeto, $valor) {
        $objeto->nome = $valor;
    }

    function apresentar() {
        echo $this->nome;
    }
}

$a = new Exemplo();
$b = new Exemplo();

$a->setPrivate($b, 'Caio');

$a->apresentar();
echo '<br>';
$b->apresentar();

?>
