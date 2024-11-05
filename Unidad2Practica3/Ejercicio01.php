<?php

/*
Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprimir todos los valores que almacena.
*/
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 30);
}

echo "Valores del array:\n";
foreach ($array as $valor) {
    echo $valor . "\n";
}

