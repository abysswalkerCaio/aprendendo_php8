<?php

# 'continue' permite retornar ao início do loop a partir do momento em que esse mesmo comando for executado.

for ($x = 0; $x <= 10; $x++) {
    if ($x < 10) {
        if ($x == 5) {
            continue;
        }
        else {
            echo $x . ', ';
        }
    }
    else {
         echo "$x.<br>";
         break;
    } 
}

# 'goto' permite você ir até um comando específico após o mesmo ser executado.

for ($x = 0; $x <= 10; $x++) {
    if ($x < 10) {
        if ($x == 5) {
            goto teste;
        }
        else {
            echo $x . ', ';
        }
    }
    else {
         echo "$x.<br>";
         break;
    } 
}

echo 'Esse comando será ignorado.';

teste:
echo "<br>Ele foi até \'teste\' com sucesso!";

?>
