<?php

/*
Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados 
mostrar en un renglón los elementos almacenados en la diagonal principal y en el 
siguiente los de la diagonal secundaria.

*/

$matriz = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

echo "Diagonal principal: ";
for ($i = 0; $i < 4; $i++) {
    echo $matriz[$i][$i] . " ";
}

echo "<br>Diagonal secundaria: ";
for ($i = 0; $i < 4; $i++) {
    echo $matriz[$i][3 - $i] . " ";
}
?>