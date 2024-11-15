<?php

/*
Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.
*/

$matriz = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

// a. Por fila
echo "Por fila:<br>";
foreach ($matriz as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
}

// b. Por columna
echo "Por columna:<br>";
for ($j = 0; $j < 5; $j++) {
    for ($i = 0; $i < 3; $i++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
?>