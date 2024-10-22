<?php
/*
5. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con 
un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de 
control switch.
*/

$dado = rand(1, 6);


switch ($dado) {
    case 1:
        $imagen = './imagenes/dado1.png';
        break;
    case 2:
        $imagen = './imagenes/dado2.png';
        break;
    case 3:
        $imagen = './imagenes/dado3.png';
        break;
    case 4:
        $imagen = './imagenes/dado4.png';
        break;
    case 5:
        $imagen = './imagenes/dado5.png';
        break;
    case 6:
        $imagen = './imagenes/dado6.png';
        break;
}


echo "<h1>El resultado del dado es: $dado</h1>";
echo "<img src='$imagen' alt='Dado $dado' />";
?>