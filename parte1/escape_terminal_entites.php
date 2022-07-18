<?php

/*
//Caracteres de Escape são utilizados para que caracteres chaves/especiais
sejam utilizados com outro propósito.
*/

//$frase1 = "A utilização de "aspas duplas" por exemplo dentro de uma string.";
$frase2 = "Agora, caso eu utilize o \"caractere de escape\", é possível a utilização de aspas duplas. ";
$frase3 = 'Assim também como a utilização de \'aspas simples\'.';

echo $frase2 . $frase3;

//Caracteres de Terminal:

echo '<br><br>Não é possível utilizar dentro de \n\raspas simples.<br>';
echo "Mas sim de \n\raspas duplas";

//A partir do PHP7, foi introduzido o Caracter de Escape Unicode:

echo '<br>';

echo "\u{A9}";
echo "\u{BC}";
echo "\u{AE}";

//Junto do uso de HTML Entities:

echo '<br>';

echo "&copy";
echo '&frac14';
echo '&reg';

?>
