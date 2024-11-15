<?php

/*
Realiza el ejercicio anterior pero con la funicón array_push().
*/

$array1 = ["a", "b", "c"];
$array2 = ["d", "e", "f"];
$array3 = ["g", "h", "i"];

$resultado = [];
array_push($resultado, ...$array1);
array_push($resultado, ...$array2);
array_push($resultado, ...$array3);

echo implode(", ", $resultado);
?>