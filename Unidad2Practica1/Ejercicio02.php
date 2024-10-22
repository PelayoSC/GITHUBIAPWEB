<?php
/*
2. Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota 
numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta los 
siguientes rangos:
Insuficiente: [0, 5)
Suficiente: [5, 6)
Bien: [6, 7)
Notable: [7, 9)
Sobresaliente: [9, 10]
*/

$nota = rand(1, 10);

if ($nota < 5) {
    $calificacion = "Insuficiente";
} elseif ($nota >= 5 && $nota < 6) {
    $calificacion = "Suficiente";
} elseif ($nota >= 6 && $nota < 7) {
    $calificacion = "Bien";
} elseif ($nota >= 7 && $nota < 9) {
    $calificacion = "Notable";
} elseif ($nota >= 9 && $nota <= 10) {
    $calificacion = "Sobresaliente";
}

echo "Nota obtenida: $nota<br>";
echo "Calificación: $calificacion";
?>
