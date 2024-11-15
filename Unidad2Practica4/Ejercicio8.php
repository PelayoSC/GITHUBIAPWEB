<?php

/*
Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y 
determine la posición [fila, columna] del número mayor almacenado en la matriz. 
*/

$matriz = [];
$max = PHP_INT_MIN;
$posicion = [0, 0];

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $matriz[$i][$j] = rand(1, 100);
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
            $posicion = [$i, $j];
        }
    }
}

echo "El elemento mayor es $max en la posición [{$posicion[0]}, {$posicion[1]}].";
?>