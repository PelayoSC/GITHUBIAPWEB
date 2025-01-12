<?php
/* <!--1. Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprimir todos los valores que almacena.*/
echo "<h2>Uso de bucles for, foreach y la función rand() en la inicialización y visualización de un array en PHP.</h2>";

for ($indice = 0; $indice < 10 ; $indice ++){
    $vector [$indice] = rand (1,30);
}
//var_dump ($vector);
foreach ($vector as $indice => $contenido) {
    echo "Posicion: $indice : Valor: $contenido <br>";
}
?>
