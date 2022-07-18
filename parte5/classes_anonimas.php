<?php 

# Classes anônimas são utilizada quando desejamos instanciar apenas um único objeto.

$anonima = new class {
    function mostrar() {
        echo 'Função \'mostrar\' da classe anônima \'anonima\'.';
    }
};

$anonima->mostrar();

?>
