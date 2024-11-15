<?php

/*
Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. 
Los valores serán los siguientes:
Haz un recorrido del array multidimensional mostrando los valores de tal manera 
que nos muestre en cada ciudad que amigos tiene
*/

$amigos = [
    "Madrid" => ["Juan", "Carlos"],
    "Barcelona" => ["Marta", "Elena"],
    "Valencia" => ["Luis", "Raquel"],
    "Sevilla" => ["Ana", "Manuel"]
];

foreach ($amigos as $ciudad => $nombres) {
    echo "<ul>";
    echo "<li><strong>$ciudad</strong>: ";
    echo implode(", ", $nombres);
    echo "</li></ul>";
}
?>