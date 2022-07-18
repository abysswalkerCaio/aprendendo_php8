<?php

class Circulo {
    private $area;

    function calcularArea($radius) {

        return $this->area = 3.14 * $radius ** 2;
    }

}

$primeiroCirculo = new Circulo();
echo $primeiroCirculo->calcularArea(50);


?>
