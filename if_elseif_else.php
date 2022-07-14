<?php

$idade = 18;

if ($idade > 18) {
    echo "Maior que 18!<br>";
}

else if ($idade == 18) {
    echo "18!<br>";
}

else {
    echo "Menor que 18!<br>";
}

$nome = "Caio";

if (!($nome == "Caio") && $idade < 18) {
    echo "Ñão!";
}

else {
    echo "Sim!";
}

?>
