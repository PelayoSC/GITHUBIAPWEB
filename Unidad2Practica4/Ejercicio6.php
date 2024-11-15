<?php

/*
Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar 
fila y columna del elemento mayor.
*/

$matriz = [];
$max = PHP_INT_MIN;
$posicion = [0, 0];

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 100);
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
            $posicion = [$i, $j];
        }
    }
}

echo "El elemento mayor es $max en la posición [{$posicion[0]}, {$posicion[1]}].";
?>