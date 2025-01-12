<?php
/*
. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con 
un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las estructuras de control if -
else y switch.
*/
$dado = rand(1, 6);
    echo "El valor obtenido del dado es $dado y se vería asi:</br>";
    echo "<img src='.\imagen_dado/$dado.png' alt='$dado'>";
?>