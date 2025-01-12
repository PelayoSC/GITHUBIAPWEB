<?php
/* Generar una matriz de 3x4 y generar un vector que contenga los valores máximos 
de cada fila y otro que contenga los promedios de los mismos. 
Imprimir ambos vectores a razón de uno por renglón.*/

echo "<h3>Matriz 3x4</h3>";
for ($i = 0; $i < 3; $i++) { // Bucle externo para las 3 filas
    for ($j = 0; $j < 4; $j++) { // Bucle interno para las 4 columnas

        $matriz[$i][$j] = rand(1, 100); // Generar un número aleatorio y asignarlo a la posición [$i][$j]
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
//Vector para los maximos
$maximos = [];

echo "<h3>Máximos de cada fila</h3>";
for ($i = 0; $i  < 3; $i++) {
    $maximos[$i] = max($matriz[$i]); // Encontrar el maximo de cada fila
    echo $maximos[$i] . "<br>";
}

//Vector para el promedio
$media = [];

echo "<h3>Medias</h3>";
for ($i = 0; $i  < 3; $i++) {
    $media[$i] = array_sum($matriz[$i]) / count($matriz[$i]); // Hacer la media de cada fila
    echo $media[$i] . "<br>";
}

/*echo "<h3>Promedios de los máximos</h3>";
$promedioMaximos = array_sum($maximos) / count($maximos);
echo $promedioMaximos . "<br>";
*/
?>