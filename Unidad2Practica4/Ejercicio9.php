<?php

/*
Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e 
imprimir la columna que tuvo la máxima suma y la suma de esa columna.
*/

$matriz = [];
$sumaColumnas = [];
$maxSuma = PHP_INT_MIN;
$columnaMax = 0;

for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        $matriz[$i][$j] = rand(1, 100);
        $sumaColumnas[$j] = ($sumaColumnas[$j] ?? 0) + $matriz[$i][$j];
    }
}

foreach ($sumaColumnas as $indice => $suma) {
    if ($suma > $maxSuma) {
        $maxSuma = $suma;
        $columnaMax = $indice;
    }
}

echo "La columna con la mayor suma es la $columnaMax con un total de $maxSuma.<br>";
?>