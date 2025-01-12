<?php
/* Almacena en un array los 10 primeros números pares. Imprímelos cada uno en 
una línea*/

// Inicializar un array vacío
$numerosPares = [];

// Generar los 10 primeros números pares
for ($i = 1; $i <= 10; $i++) {
    $numerosPares[] = $i * 2; // MultiplicO por 2 para obtener números pares
}

// Imprimir cada número par en una nueva línea
foreach ($numerosPares as $numero) {
    echo $numero . "<br>";
}
?>