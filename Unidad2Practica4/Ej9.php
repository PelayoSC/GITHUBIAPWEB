<?php
/*Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e 
imprimir la columna que tuvo la máxima suma y la suma de esa columna.*/


// Crear la matriz de 20x20 y llenarla con valores aleatorios
$matriz = [];
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

// Inicializar un array para las sumas de las columnas
$sumaColumnas = [];

// Calcular las sumas de las columnas
for ($j = 0; $j < 20; $j++) {
    $sumaColumnas[$j] = 0; // Inicializamos la suma de cada columna
    for ($i = 0; $i < 20; $i++) {
        $sumaColumnas[$j] += $matriz[$i][$j];
    }
}

// Encontrar la columna con la suma máxima
$columnaMax = array_keys($sumaColumnas, max($sumaColumnas))[0];
$maxSuma = $sumaColumnas[$columnaMax];

// Imprimir la matriz generada
echo "Matriz generada:<br>";
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>"; // Salto de línea al final de cada fila
}

// Imprimir la columna con la suma máxima y el valor
echo "<br>La columna con la suma máxima es: " . ($columnaMax + 1) . "<br>";
echo "La suma de esa columna es: $maxSuma<br>";
?>

