<?php

# Com a palavra chave 'static', é possível utilizar variáveis e métodos sem a necessidade da instanciação de um objeto.

class Exemplo {
    static $nome = 'Caio';

    static function teste() {
        echo '<br>Dentro de uma função \'static\'.<br>Mostrando mais um vez a mesma variável da classe: ' . self::$nome;
    }
}

echo Exemplo::$nome;
echo Exemplo::teste();

?>
