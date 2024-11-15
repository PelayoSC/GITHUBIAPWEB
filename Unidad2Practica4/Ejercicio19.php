<?php

/*
 Muestra el array del ejercicio anterior pero en orden inverso.
*/

$resultado = ["a", "b", "c", "d", "e", "f", "g", "h", "i"];
$resultadoInvertido = array_reverse($resultado);

echo implode(", ", $resultadoInvertido);
?>