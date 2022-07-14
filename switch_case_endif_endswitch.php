<?php

$nome = 'Caio';

switch($nome) {
    case 'Caio':
        echo 'O nome é Caio!';
        break;
    case 'Ryan':
        echo 'O nome é Ryan!';
        break;
    default:
        echo 'O nome não é Caio nem Ryan!';
        break;
}

# Podemos criar uma estrutura condicional alternativa com endif.

if ($nome == 'Caio'):
    echo '<br>O nome é Caio!<br>';
else:
    echo '<br>O nome não é Caio!<br>';
endif;

# Podemos também criar uma estrutura condicional alternativa com endswitch.

switch($nome):
    case 'Caio':
        echo 'Estrutura alternativa com switch e o nome é Caio!';
        break;
    case 'Ryan':
        echo 'Estrutura alternativa com switch e o nome é Ryan!';
        break;
    default:
        echo 'Estrutura alternativa com switch e o nome não é Caio nem Ryan!';
        break;
endswitch;

?>
