<?php
/*
 Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con 
un valor aleatorio enre 1 y 6. Resuelva el ejercicio utilizando la estructura de control if -
else.
Notas:
Documentación de la función rand.
Documentación de la estructura de control if.
Documentación de la estructura de control else.
Documentación del elemento de imagen <img> en HTM
*/
$dado = rand (1, 6);
echo "El valor de la cara obtenida es '$dado' y se veria asi en el dado:<br>";
if ($dado == 1){
    echo '<img src=".\imagen_dado\1.png" alt="Uno">';
    }
    elseif ($dado == 2){
        echo '<img src=".\imagen_dado\2.png" alt="Dos">';
        }
        elseif ($dado == 3){
            echo '<img src=".\imagen_dado\3.png" alt="Tres">';
            }
            elseif ($dado == 4){
                echo '<img src=".\imagen_dado\4.png" alt="Cuatro">';
                }
                elseif ($dado == 5){
                    echo '<img src=".\imagen_dado\5.png" alt="Cinco">';
                    }
                    else {
                        echo '<img src=".\imagen_dado\6.png" alt="Seis">';
                    }
?>
