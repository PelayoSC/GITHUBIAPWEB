<?php
/* Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y 
determine la posición [fila, columna] del número mayor almacenado en la matriz*/


// Inicializar una matriz 10x10 con valores aleatorios
$filas = 10;
$columnas = 10;
$matriz = [];

// Llenar la matriz con valores aleatorios entre 1 y 100
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

// Variables para guardar el valor máximo y su posición
$maximo = PHP_INT_MIN; // Iniciar con el valor más bajo posible
$filaMax = -1;
$columnaMax = -1;

// Buscar el valor máximo y su posición
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        if ($matriz[$i][$j] > $maximo) {
            $maximo = $matriz[$i][$j];
            $filaMax = $i;
            $columnaMax = $j;
        }
    }
}

// Imprimir la matriz en formato de tabla HTML
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
foreach ($matriz as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td style='padding: 5px;'>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Mostrar el valor máximo y su posición
echo "<br>El valor máximo es: $maximo<br>";
echo "Se encuentra en la fila: " . ($filaMax + 1) . " y columna: " . ($columnaMax + 1) . "<br>";
?>
