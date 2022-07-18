<?php

function variadicParameter(...$arguments) {
    foreach ($arguments as $v) {
        echo "$v ";
    }
}

variadicParameter(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

?>
