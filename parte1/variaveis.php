<?php

$primeiro = 1;
$segundo = 2;

$adicao = $primeiro + $segundo;
$subtracao = $primeiro - $segundo;
$divisao = $primeiro / $segundo;
$multiplicacao = $primeiro * $segundo;
$resto = $primeiro % $segundo;
$exponenciacao = $segundo ** 3;

echo "Adição: $adicao";
echo "<br>Subtração: $subtracao ";
echo "<br>Divisão: $divisao";

echo "<br>Multiplicação: " . $multiplicacao;
echo "<br>Resto da Divisão: " . $resto;
echo "<br>Exponenciação: " . $exponenciacao;

$incremento = 3;
$incremento += 50;
echo "<br><br>Valor 3 com Incremento de Adição: $incremento";

$incremento = 3;
$incremento -= 50;
echo "<br>Valor 3 com Incremento de Subtração: $incremento";

$incremento = 3;
$incremento *= 50;
echo "<br>Valor 3 com Incremento de Multiplicação: $incremento";

$incremento = 3;
$incremento /= 50;
echo "<br>Valor 3 com Incremento de Divisão: $incremento";

$incremento = 3;
$incremento++;
// ++$incremento;
echo "<br>Valor 3 com Incremento Simples: $incremento";

$incremento = 3;
$incremento--;
// --$incremento;
echo "<br>Valor 3 com Decremento Simples: $incremento";

//Além disso, existem outros diversos tipos de variáveis:

$integer = 1;
$float = 1.5;
$boolean = true;
$string = 'Hello World!';
$array = [1, 2, 3];
$objeto = new Objeto();
$nulo = null;

echo '<br>';

?>
