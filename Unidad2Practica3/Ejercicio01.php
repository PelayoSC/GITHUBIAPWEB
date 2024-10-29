<?php

/*
1. Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprimir todos los valores que almacena.
*/
foreach($v as $i =>$c)
    echo "$i:$c<br>"

    for ($n=0; $n<10; $n++){
        $v[$n]=rand(1,30);
    }

    //var_dump($v);
?>
