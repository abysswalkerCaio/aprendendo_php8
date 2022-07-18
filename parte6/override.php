<?php

class Exemplo {
    public $teste = 1;

    function metodoTeste() {
        echo 'Dentro da classe Exemplo.';
    }
}

class Sobrescrita extends Exemplo {
    public $teste = 2;

    function metodoTeste() {
        echo 'Dentro da classe Sobrescrita.';
    }
}

$override = new Sobrescrita();
$override->metodoTeste();

?>
