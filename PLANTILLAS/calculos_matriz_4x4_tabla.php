<?php
/* 
a) Haz una matrix 4x4 con numeros aleatorios del 1 al 100. 
b) representalo en una tabla
c) calcula la diagonal principal
d) calcula la diagonal secundaria
e) Indica en que fila y columna se encuentra el elemento mayor
f) indica en que fila y columna se encuentra el elemento menor
g) calcula cada una de sus filas
h) calcula cada una de sus columnas
i) calcula el valor medio
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 4x4 y Cálculos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            text-align: center;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Matriz 4x4 y Cálculos</h1>
    <?php
    // a) Generar la matriz 4x4 con números aleatorios
    $filas = 4;
    $columnas = 4;
    $matriz = [];
    $totalElementos = $filas * $columnas; // Cantidad total de elementos

    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $matriz[$i][$j] = rand(1, 100);
        }
    }

    // b) Imprimir la matriz en forma de tabla
    echo "<h3>Matriz:</h3>";
    echo "<table>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // c) Calcular la diagonal principal
    $diagonalPrincipal = 0;
    for ($i = 0; $i < $filas; $i++) {
        $diagonalPrincipal += $matriz[$i][$i];
    }
    echo "<h3>Suma de la diagonal principal: $diagonalPrincipal</h3>";

    // d) Calcular la diagonal secundaria
    $diagonalSecundaria = 0;
    for ($i = 0; $i < $filas; $i++) {
        $diagonalSecundaria += $matriz[$i][$filas - $i - 1];
    }
    echo "<h3>Suma de la diagonal secundaria: $diagonalSecundaria</h3>";

    // e) Encontrar el elemento mayor y su posición
    $maximo = PHP_INT_MIN;
    $filaMax = -1;
    $columnaMax = -1;

    // f) Encontrar el elemento menor y su posición
    $minimo = PHP_INT_MAX;
    $filaMin = -1;
    $columnaMin = -1;

    // Variable para sumar todos los valores (para la media)
    $sumaTotal = 0;

    foreach ($matriz as $i => $fila) {
        foreach ($fila as $j => $valor) {
            $sumaTotal += $valor; // Acumular la suma total
            if ($valor > $maximo) {
                $maximo = $valor;
                $filaMax = $i + 1;
                $columnaMax = $j + 1;
            }
            if ($valor < $minimo) {
                $minimo = $valor;
                $filaMin = $i + 1;
                $columnaMin = $j + 1;
            }
        }
    }

    // g) Calcular el valor medio
    $valorMedio = $sumaTotal / $totalElementos;

    echo "<h3>Elemento mayor: $maximo (Fila: $filaMax, Columna: $columnaMax)</h3>";
    echo "<h3>Elemento menor: $minimo (Fila: $filaMin, Columna: $columnaMin)</h3>";
    echo "<h3>Valor medio: $valorMedio</h3>";

    // h) Calcular la suma de cada fila
    echo "<h3>Suma de cada fila:</h3>";
    for ($i = 0; $i < $filas; $i++) {
        $sumaFila = array_sum($matriz[$i]);
        echo "Fila " . ($i + 1) . ": $sumaFila<br>";
    }

    // i) Calcular la suma de cada columna
    echo "<h3>Suma de cada columna:</h3>";
    for ($j = 0; $j < $columnas; $j++) {
        $sumaColumna = 0;
        for ($i = 0; $i < $filas; $i++) {
            $sumaColumna += $matriz[$i][$j];
        }
        echo "Columna " . ($j + 1) . ": $sumaColumna<br>";
    }
    ?>
</body>
</html>
