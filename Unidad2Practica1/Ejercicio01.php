<?php
/*
1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una 
imagen con la cara o la cruz de la moneda.
*/

$moneda = rand(0,1);
if ($moneda == 0){
    echo "Ha salido cara";
    echo "<br>";
    echo '<img src="./imagenes/peseta_cara.png">';
}
else {
    echo "Ha salido cruz";
    echo "<br>";
    echo '<img src="./imagenes/peseta_cruz.png">';
}
?>