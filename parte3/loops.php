<?php

# While:

$x = 0;

echo 'Demonstração do Loop While:<br>';

while ($x <= 10) {
    if ($x < 10) {
       echo $x++ . ', ';
    }
    else {
        echo "$x.";
        break;
    }
}

# Do While:

echo '<br><br>Demonstração do Loop Do While:<br>';

$x = 0;

do {
    if ($x < 10) {
        echo $x++ . ', ';
    }
    else {
         echo "$x.<br>";
         break;
    }
}
while ($x <= 10);

# For:

echo '<br>Demonstração do Loop For:<br>';

for ($x = 0; $x <= 10; $x++) {
    if ($x < 10) {
        echo $x . ', ';
    }
    else {
         echo "$x.<br>";
         break;
    } 
}

# For para leitura de arrays:

echo '<br>Demonstração do Loop For para leitura de um array:<br>';

$array = [100, 200, 300, 400, 500];

for ($x = 0; $x < sizeOf($array); $x++) {
    echo "Índice de número $x: $array[$x]<br>";
}

# Foreach:

echo '<br>Demonstração do Loop Foreach:<br>';

foreach ($array as $numeros) {
    echo "$numeros ";
}

echo '<br><br>Demonstração do Loop Foreach para leitura das chaves e valores do array:<br>';

$paises = [
    'Canadá' => 'Vancouver',
    'Brasil' => 'São Vicente'
];

foreach ($paises as $key => $value) {
    echo "Pais: $key e uma de suas cidade: $value<br>";
}

?>
