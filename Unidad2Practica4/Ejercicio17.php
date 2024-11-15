<?php

/*
Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por 
pantalla. Utiliza la función array_merge()
*/

$array1 = ["a", "b", "c"];
$array2 = ["d", "e", "f"];
$array3 = ["g", "h", "i"];

$resultado = array_merge($array1, $array2, $array3);
echo implode(", ", $resultado);
?>