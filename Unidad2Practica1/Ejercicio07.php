<?php
/*
7. Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen 
con los valores obtenidos en cada uno de los dados.
*/

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

$imagen1 = './imagenes/dado' . $dado1 . '.png';
$imagen2 = './imagenes/dado' . $dado2 . '.png';

echo "<h1>Resultados del lanzamiento de dos dados:</h1>";
echo "<p>El primer dado ha sacado un: $dado1</p>";
echo "<img src='$imagen1' alt='Dado 1' />";
echo "<p>El segundo dado ha sacado un: $dado2</p>";
echo "<img src='$imagen2' alt='Dado 2' />";
?>