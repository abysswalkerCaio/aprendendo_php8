<?php

$a = 100;

function globalVariable() {
    $GLOBALS['a'] = 200;
}

globalVariable();

echo $a;

?>
