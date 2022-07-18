<?php

# Traits são utlizadas para criarmos um conjunto de métodos que podem ser utilizados por qualquer classe.

trait Metodos {
    function dizerOla() {
        echo 'Olá!';
    }

    function dizerAdeus() {
        echo '<br>Adeus!';
    }
}

class Cumprimentar {
    use Metodos;
}

$pessoa = new Cumprimentar();
$pessoa->dizerOla();
$pessoa->dizerAdeus();

?>
