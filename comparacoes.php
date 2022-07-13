<?php

// '==' e '!=' comparam somente os valores.
// '===' e '!==' comparam os valores e os tipos de dados.

$comparacao = (2 == 3); //false
$comparacao = (2 == 2); //true
$comparacao = (2 == "2"); //true 
$comparacao = (2 === "2"); //false 

$comparacao = (2 != 3); //true
$comparacao = (2 <> 3); //true (Forma alternativa se verificar se os dois valores são diferentes).
$comparacao = (2 != '2'); //false
$comparacao = (2 !== '2'); //true

$comparacao = (2 > 3); //false
$comparacao = (2 < 3); //true
$comparacao = (2 >= 3); //false
$comparacao = (2 <= 3); //true

//Nova forma de comparação que foi adicionada a partir do PHP7:

$comparacao = 1 <=> 1; # 0 (1 == 1)
$comparacao = 3 <=> 2; # 1 (3 > 2)
$comparacao = 1 <=> 2; # -1 (1 < 2)

?>
