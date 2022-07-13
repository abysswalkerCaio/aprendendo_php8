<?php

$texto = "Texto já";
$texto .= " concatenado diretamente.";

$interpretacao = "$texto"; //Com o uso de aspas duplas, a variável é interpretada e o seu valor é utilizado.
$interpretacao = '$texto'; //Com o suo de aspas simples, a variável não é interpretada.

echo $texto;

?>
