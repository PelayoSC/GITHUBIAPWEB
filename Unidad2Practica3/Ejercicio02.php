<?php

/*
Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Calcular el valor medio de los valores del array.
Mostrar el valor medio que ha calculado
*/

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 30);
}

echo "Valores del array:\n";
foreach ($array as $valor) {
    echo $valor . "\n";
}

$media = array_sum($array) / count($array);

echo "<br>";
echo "Valor medio: " . $media . "\n";

?>