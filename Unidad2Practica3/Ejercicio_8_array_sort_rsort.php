<?php
/* Escribe un script PHP que sobre un array de temperaturas realice las siguientes 
operaciones:
Mostrar el listado ordenado de mayor a menor.
Mostrar el listado ordenado de menor a mayor.
El array de temperaturas lo vamos a generar con números aleatorios. 
El array será de 20 elementos y los valores aletorios generados estarán entre 1 y 30.
*/

// Generar un array de 20 elementos con valores aleatorios entre 1 y 30
$temperaturas = array();
for ($i = 0; $i < 20; $i++) {
    $temperaturas[] = rand(1, 30);
}

// Mostrar el array originals
echo "<h2>Array de temperaturas generado aleatoriamente:</h2>";
echo "Temperaturas: " . implode(", ", $temperaturas) . "<br><br>";

// Ordenar de menor a mayor
$temperaturas;
sort($temperaturas); // Ordena de menor a mayor
echo "<h2>Temperaturas ordenadas de menor a mayor:</h2>";
echo implode(", ", $temperaturas) . "<br><br>";

// Ordenar de mayor a menor
$temperaturas;
rsort($temperaturas); // Ordena de mayor a menor
echo "<h2>Temperaturas ordenadas de mayor a menor:</h2>";
echo implode(", ", $temperaturas) . "<br>";
?>