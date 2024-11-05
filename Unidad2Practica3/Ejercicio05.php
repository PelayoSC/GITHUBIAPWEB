<?php

/*
Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
Calcular la media.
Calcular el valor máximo.
Calcular el valor mínimo.
Mostrar todos los valores calculados.
El array de temperaturas lo vamos a generar con números aleatorios. El array será de 
10 elementos y los valores aletorios generados estarán entre 1 y 30.

Resuelva el ejercicio utilizando bucles for.
*/

$temperaturas = [];
for ($i = 0; $i < 10; $i++) {
    $temperaturas[$i] = rand(1, 30);
}

$sumaTemperaturas = 0;
$temperaturaMaxima = $temperaturas[0];
$temperaturaMinima = $temperaturas[0];

for ($i = 0; $i < count($temperaturas); $i++) {
    $sumaTemperaturas += $temperaturas[$i];

    if ($temperaturas[$i] > $temperaturaMaxima) {
        $temperaturaMaxima = $temperaturas[$i];
    }

    if ($temperaturas[$i] < $temperaturaMinima) {
        $temperaturaMinima = $temperaturas[$i];
    }
}

$mediaTemperaturas = $sumaTemperaturas / count($temperaturas);

echo "<h3>Resultados de Temperaturas Generadas:</h3>";
echo "Temperaturas: " . implode(", ", $temperaturas) . "<br>";
echo "Media: " . $mediaTemperaturas . "<br>";
echo "Temperatura Máxima: " . $temperaturaMaxima . "<br>";
echo "Temperatura Mínima: " . $temperaturaMinima . "<br>";
?>