<?php

$texto = 'Texto já';
$texto .= ' concatenado diretamente. ';

$interpretacao = "$texto"; //Com o uso de aspas duplas, a variável é interpretada e o seu valor é utilizado.
$interpretacao = '$texto'; //Com o suo de aspas simples, a variável não é interpretada.

echo $texto;

$descricao = <<<LABEL
Utilização da LABEL em PHP para a digitação de grandes descrições ou textos grandes.
LABEL;

echo $descricao;

?>
