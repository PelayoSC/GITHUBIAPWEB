<?php
/*
Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una 
imagen con la cara o la cruz de la moneda.
*/
$moneda = rand(0, 1);
if ($moneda == 0) { 
    echo 'Ha salido cara <br>'; //0 en  este caso es cara
    //para insertar una imagen - pintar
    // ojo, la ruta parte desde donde esta este archivo
    echo '<img src=".\imagen_moneda\cara.png" alt="Cara">';
    } 
    else {
    echo 'Ha salido cruz <br>';
    //para insertar una imagen - pintar
    echo '<img src=".\imagen_moneda\cruz.png" alt="Cruz">';
}
?>
