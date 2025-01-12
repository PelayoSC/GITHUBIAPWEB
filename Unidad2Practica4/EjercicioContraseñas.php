<?php
echo "<h3>Ejercicio contraseñas con 4 letras</h3>";
//La palabra que queremos adivinar
$palabra = "coco";

//Array de letras permitidas solo en minuscula
$letras = range ('a', 'z');

//Variable para indicar si la palabra fue encontrada
$encontrada=false;

//Ponemos a 0 la variable encargada de contar las ejecuciones
$cuenta=0;

//Generamos todas las combinaciones posibles de 4 letras
foreach($letras as $l1){ //es una l
    foreach($letras as $l2){
        foreach($letras as $l3){
            foreach($letras as $l4){
                //Contamos las ejecuciones
                $cuenta++;
                //Combinación actual
                $combinacion = $l1 . $l2 . $l3 . $l4;
                echo $combinacion . " combinación ".$cuenta."<br>";

                //Comprobamos si la combinación es igual a la palabra
                if($combinacion === $palabra){
                    echo "!Palabra Encontrada: $combinacion!<br>";
                    $encontrada=true;
                    break 4; //Salimos de los 4 bucles
                }
            }
        }
    }

    if(!$encontrada){
        echo "La palabra no fue encontrada.";
    }
}

?>