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

$temperaturas = array();

for ($i = 0; $i < 10; $i++) {
    $temperaturas[$i] = rand(1, 30);
}

$suma = 0;
for ($i = 0; $i < count($temperaturas); $i++) {
    $suma += $temperaturas[$i];
}

$media = $suma / count($temperaturas);

$maximo = 0;
for ($i = 0; $i < count($temperaturas); $i++) {
    if ($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i];
    }
}

$minimo = 31;
for ($i = 0; $i < count($temperaturas); $i++) {
    if ($temperaturas[$i] < $minimo) {
        $minimo = $temperaturas[$i];
    }
}

echo "Valores del array de temperaturas:<br>";
for ($i = 0; $i < count($temperaturas); $i++) {
    echo "$temperaturas[$i]<br>";
}

echo "<br>La media de las temperaturas es: $media";
echo "<br>La temperatura máxima es: $maximo";
echo "<br>La temperatura mínima es: $minimo";
?>