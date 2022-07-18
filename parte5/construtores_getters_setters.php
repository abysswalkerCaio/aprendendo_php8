<?php

class Pessoa {
    private $nome, $idade, $altura;

    function __construct($nome, $idade, $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }
}

$primeiraPessoa = new Pessoa('Caio', 18, 1.65);
$segundaPessoa = new Pessoa('Ryan', 18, 1.80);

echo 'Primeiro Objeto:<br>';

echo $primeiraPessoa->getNome() . '<br>' . $primeiraPessoa->getIdade() . '<br>' . $primeiraPessoa->getAltura() . '<br>';

echo '<br>Segundo Objeto:<br>';

echo $segundaPessoa->getNome() . '<br>' . $segundaPessoa->getIdade() . '<br>' . $segundaPessoa->getAltura() . '<br>';

?>
