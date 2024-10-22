<?php
/*
6. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con 
un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las estructuras de control if -
else y switch.
*/


$dado = rand(1, 6);

$imagen = './imagenes/dado' . $dado . '.png';

echo "<h1>El resultado del dado es: $dado</h1>";
echo "<img src='$imagen' alt='Dado $dado' />";

?>