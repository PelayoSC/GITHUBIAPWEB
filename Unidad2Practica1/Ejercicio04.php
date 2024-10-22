<?php
/*
4. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con 
un valor aleatorio enre 1 y 6. Resuelva el ejercicio utilizando la estructura de control if -
else.
*/

$dado = rand(1, 6);

if ($dado == 1) {
    $imagen = './imagenes/dado1.png';
} elseif ($dado == 2) {
    $imagen = './imagenes/dado2.png';
} elseif ($dado == 3) {
    $imagen = './imagenes/dado3.png';
} elseif ($dado == 4) {
    $imagen = './imagenes/dado4.png';
} elseif ($dado == 5) {
    $imagen = './imagenes/dado5.png';
} elseif ($dado == 6) {
    $imagen = './imagenes/dado6.png';
}

echo "<h1>El resultado del dado es: $dado</h1>";
echo "<img src='$imagen' alt='Dado $dado' />";
?>
