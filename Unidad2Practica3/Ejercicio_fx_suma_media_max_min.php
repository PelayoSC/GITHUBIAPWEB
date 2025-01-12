<?php
/* Resuelva el ejercicio utilizando bucles for
Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
Calcular la media.
Calcular el valor máximo.
Calcular el valor mínimo.
Mostrar todos los valores calculados.
El array de temperaturas lo vamos a generar con números aleatorios. El array será de 
10 elementos y los valores aletorios generados estarán entre 1 y 30.
*/

echo "<h2>Array de temperaturas usando bucle: FOR.<br>
Uso de funciones de PHP como rand(), array_sum(),count(), max(), min(), implode y number_format().</h2>";

// Generar un array de 10 elementos con valores aleatorios entre 1 y 30
$temperaturas = array();
for ($i = 0; $i < 10; $i++) {
    $temperaturas[$i] = rand(1,30);
}

// Calcular la media
$suma = array_sum($temperaturas);
$media = $suma / count($temperaturas);

// Calcular el valor máximo
$maximo = max($temperaturas);

// Calcular el valor mínimo
$minimo = min($temperaturas);

// Mostrar todos los valores calculados
echo "Array de temperaturas: " . implode(", ", $temperaturas) . "<br>";
echo "Media de temperaturas: " . number_format($media, 2) . "<br>";
echo "Temperatura máxima: " . $maximo . "<br>";
echo "Temperatura mínima: " . $minimo . "<br>";
?>