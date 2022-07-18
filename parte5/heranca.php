<?php

class Animal {
    private $nome, $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
}

class Wolf extends Animal {
    private $especie;

    function __construct($especie) {
        $this->especie = $especie;
    }

    function getEspecie() {
        return $this->especie;
    }
}

$lobo = new Wolf('Great Grey Wolf');
$lobo->setNome('Sif');
$lobo->setIdade(1);

echo $lobo->getNome() . '<br>';
echo $lobo->getIdade() .'<br>';
echo $lobo->getEspecie();

?>
