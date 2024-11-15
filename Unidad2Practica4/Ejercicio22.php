<?php

/*
Crea un array con los siguientes valores: 5->1, 12->2, 13->56, x->42. Muestra el 
contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A 
continuación borrar el contenido de posición 5. Vuelve a mostrar el contenido y 
por último elimina el array.
*/

$array = [
    5 => 1,
    12 => 2,
    13 => 56,
    "x" => 42
];

// Mostrar contenido inicial
echo "Contenido inicial:<br>";
foreach ($array as $indice => $valor) {
    echo "$indice => $valor<br>";
}

// Número de elementos
echo "Número de elementos: " . count($array) . "<br>";

// Eliminar posición 5
unset($array[5]);

// Mostrar después de eliminar
echo "Contenido tras eliminar posición 5:<br>";
foreach ($array as $indice => $valor) {
    echo "$indice => $valor<br>";
}

// Eliminar array completo
unset($array);
?>