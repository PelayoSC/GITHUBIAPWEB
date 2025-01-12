<?php
/*  Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar 
fila y columna del elemento mayor.*/


// Inicializar una matriz 4x5 con valores aleatorios
$filas = 4;
$columnas = 5;
$matriz = [];

// Llenar la matriz con valores aleatorios entre 1 y 100
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

// Variables para guardar el valor máximo y su posición
$maximo = PHP_INT_MIN; // Número más bajo posible para empezar
$filaMax = -1;
$columnaMax = -1;

// Buscar el elemento mayor y su posición
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        if ($matriz[$i][$j] > $maximo) {
            $maximo = $matriz[$i][$j];
            $filaMax = $i;
            $columnaMax = $j;
        }
    }
}

// Imprimir la matriz
echo "Matriz generada:<br>";
foreach ($matriz as $fila) {
    echo implode(" ", $fila) . "<br>";
}

// Imprimir el valor máximo y su posición
echo "<br>El valor máximo es: $maximo<br>";
echo "Se encuentra en la fila: " . ($filaMax + 1) . " y columna: " . ($columnaMax + 1) . "<br>";
?>
