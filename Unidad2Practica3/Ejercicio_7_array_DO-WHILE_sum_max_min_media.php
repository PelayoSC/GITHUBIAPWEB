<?php
/* Resuelva el ejercicio utilizando bucles do-while.
Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
Calcular la media.
Calcular el valor máximo.
Calcular el valor mínimo.
Mostrar todos los valores calculados.
El array de temperaturas lo vamos a generar con números aleatorios. El array será de 
10 elementos y los valores aletorios generados estarán entre 1 y 30.*/

echo "<h2>Array de temperaturas usando bucle: DO-WHILE.<br>
Uso de funciones de PHP como rand(),count(), implode y number_format().</h2>";

// Generar un array de 10 elementos con valores aleatorios entre 1 y 30
$temperaturas = array();
$i = 0;
do {
    $temperaturas[$i] = rand(1, 30);
    $i++;
} while ($i < 10);

// Calcular la suma para la media
$suma = 0;
$i = 0;
do {
    $suma += $temperaturas[$i];
    $i++;
} while ($i < count($temperaturas));
$media = $suma / count($temperaturas);

// Calcular el valor máximo
$maximo = 0;
$i = 1;
do {
    if ($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i];
    }
    $i++;
} while ($i < count($temperaturas));

// Calcular el valor mínimo
$minimo = 31;
$i = 1;
do {
    if ($temperaturas[$i] < $minimo) {
        $minimo = $temperaturas[$i];
    }
    $i++;
} while ($i < count($temperaturas));

// Mostrar todos los valores calculados
echo "Array de temperaturas: " . implode(", ", $temperaturas) . "<br>";
echo "Media de temperaturas: " . number_format($media, 2) . "<br>";
echo "Temperatura máxima: " . $maximo . "<br>";
echo "Temperatura mínima: " . $minimo . "<br>";
?>
