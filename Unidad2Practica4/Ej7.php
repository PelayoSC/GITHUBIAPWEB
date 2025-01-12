<?php
/* Generar una matriz de 3x4 y generar un vector que contenga los valores máximos 
de cada fila y otro que contenga los promedios de los mismos. 
Imprimir ambos vectores a razón de uno por renglón.*/

// Inicializar una matriz vacía
$matriz = [];

// Generar una matriz de 3x4 con números aleatorios entre 1 y 100
for ($i = 0; $i < 3; $i++) { // Bucle externo para las 3 filas
    for ($j = 0; $j < 4; $j++) { // Bucle interno para las 4 columnas
        $matriz[$i][$j] = rand(1, 100); // Generar un número aleatorio y asignarlo a la posición [$i][$j]
    }
}

// Inicializar un vector vacío para almacenar los máximos de cada fila
$maximos = [];
foreach ($matriz as $fila) { // Recorrer cada fila de la matriz
    $maximos[] = max($fila); // Obtener el máximo valor de la fila y agregarlo al vector $maximos
}

// Inicializar un vector vacío para almacenar los promedios de cada fila
$promedios = [];
foreach ($matriz as $fila) { // Recorrer cada fila de la matriz
    $promedios[] = array_sum($fila) / count($fila); // Calcular el promedio (suma de elementos dividido por la cantidad) y agregarlo al vector $promedios
}

// Imprimir el título de la matriz
echo "<strong>Matriz 3x4:</strong><br>"; // Usar <strong> para poner el título en negrita

// Imprimir la matriz fila por fila
foreach ($matriz as $fila) { // Recorrer cada fila de la matriz
    echo implode(" ", $fila) . "<br>"; // Convertir la fila en un texto separado por espacios y agregar un salto de línea con <br>
}

// Imprimir el vector de máximos
echo "<br><strong>Vector de máximos:</strong><br>"; 
echo implode(" ", $maximos) . "<br>"; // Convertir el vector de máximos en texto separado por espacios y agregar un salto de línea

// Imprimir el vector de promedios
echo "<br><strong>Vector de promedios:</strong><br>"; 
echo implode(" ", $promedios) . "<br>"; // Convertir el vector de promedios en texto separado por espacios y agregar un salto de línea
?>
