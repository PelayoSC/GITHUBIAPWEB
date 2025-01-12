<?php
/*Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Calcular el valor medio de los valores del array.
Mostrar el valor medio que ha calculado*/
echo "<h2>Uso de bucles for, foreach y funciones matemáticas para inicializar, imprimir y calcular la media de un array en PHP.</h2>";

for ($indice = 0; $indice < 10 ; $indice ++){
    $vector [$indice] = rand (1,30);
}

$suma = 0;
foreach ($vector as $indice => $contenido) {
    echo "Posicion: $indice  : Número: $contenido <br>";
    $suma = $suma + $contenido;
}
$media = $suma /count ($vector);
echo "<br>La <b>media</b> del vector es: $media";
?>