<?php

# Closures permitem que você utilize uma variável fora do escopo de uma função anônima.

$y = 20;
$z = 30;

$closure = function($x = 10) use ($y, $z) {
    echo "X:$x, Y:$y, Z:$z<br>";

    # Não é possível alterar os valores das variáveis que estão fora do escopo.
    $z += 70;
};

$closure();

echo "Como é possível visualizar, o valor de 'z' não foi alterado: $z<br>";

# Existe uma outra possibildade de escrever essa função de uma forma mais simplificada.

$secondClosure = fn($x = 40) => "X:$x, Y:$y, Z:$z";

echo $secondClosure();

?>
