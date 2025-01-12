<?php
/*Carga el siguiente vector e imprime los valores del array asociativo usando la estructura de control foreach:
$v[1]=90;
$v[30]=7;
$v[‘e’]=99;
$v[‘hola’]=43;
*/

// Definimos el array asociativo con los valores dados
$v = array(
    1 => 90,        // Clave numérica 1 con valor 90
    30 => 7,        // Clave numérica 30 con valor 7
    'e' => 99,      // Clave de texto 'e' con valor 99
    'hola' => 43    // Clave de texto 'hola' con valor 43
);

// Usamos foreach para recorrer el array y mostrar las claves y valores
foreach ($v as $clave => $valor) { //En cada vuelta, $clave contiene la clave del elemento actual, y $valor contiene su valor.
    echo "Clave: $clave, Valor: $valor <br>"; // Imprimimos cada clave y su valor
}
?>
