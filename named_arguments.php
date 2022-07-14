<?php

# Com Named Arguments, podemos passar argumentos para um parâmetro fora da ordem na hora da chamada da função.

function multiplicacao($a = 2, $b) {
    echo $a * $b;
}

multiplicacao(b : 12);

?>
