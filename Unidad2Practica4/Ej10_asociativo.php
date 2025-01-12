<?php
/*Carga el siguiente vector e imprime los valores del array asociativo usando la estructura de control foreach:
$v[1]=90;
$v[30]=7;
$v[‘e’]=99;
$v[‘hola’]=43;
*/

// Definimos el array asociativo con los valores dados
$v=array(1=>90, 30=>7, 'e'=>99, 'hola'=>4);

// Usamos foreach para recorrer el array y mostrar las claves y valores
foreach ($v as $i => $contenido) { //En cada vuelta, $clave contiene la clave del elemento actual, y $valor contiene su valor.
    echo "El indice es $i y el contenido es $contenido <br>"; // Imprimimos cada clave y su valor
}
?>