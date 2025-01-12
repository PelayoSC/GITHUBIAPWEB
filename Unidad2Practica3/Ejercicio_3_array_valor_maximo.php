<?php
/*Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Buscar el valor máximo de los valores del array.
Muestre el valor máximo que ha encontrado.*/
echo "<h2>Uso de bucles for, foreach y funciones matemáticas para inicializar, imprimir y calcular el valor máximo de un array en PHP.</h2>";

$mayor = 0; //inicia una variable a 0
for ($i = 0; $i < 10 ; $i ++)
    $elemento [$i] =rand(1,30);

foreach ($elemento as $x){
    echo "$x"."<br>";
    if ($mayor < $x){
        $mayor=$x;
    };
};
echo "<br>El número más <b>alto</b> es: $mayor";
?>