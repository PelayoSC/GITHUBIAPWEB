<!--4. Genera una matriz de 44 de forma aleatoria con números enteros desordenados
mostrar en un renglón los elementos almacenados en la diagonal principal y en el
siguiente los de la diagonal secundaria.-->
<?php
echo "<h3>Matriz 44</h3>";
for ($i=0; $i<4; $i++) #Primer bucle, recorre filas
    for ($j=0; $j<4; $j++) #Segundo bucle, recorre columnas

$matriz [$i][$j] = rand (1,100); 
// Mostrar todos los elementos de la matriz
for ($i=0; $i<4; $i++)
    for ($j=0; $j<4; $j++)
    echo "El elemento $i,$j es " . $matriz [$i][$j]. "<br>";

echo "<br>";

echo "<h3>Diagonal principal</h3>";
//contiene elementos donde fila y columna es el mismo
for ($i=0; $i<4; $i++)
echo "<br>Esta es la diagonal principal $i,$i es " . $matriz [$i][$i];

echo "<br>";

echo "<h3>Diagonal secundaria</h3>";
// Contiene elementos donde fila y columna suman 3
for ($i=0; $i<4; $i++)
echo "<br>Esta es la diagonal secundaria " . $i . "," . 3-$i . " es  " . $matriz [$i][3-$i];

?>