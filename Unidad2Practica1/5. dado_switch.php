<?php
/*
Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con 
un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de 
control switch.
Notas:
Documentación de la función rand.
Documentación de la estructura de control switch.
Documentación del elemento de imagen <img> en HTML.
*/
$dado = rand (1, 6);
echo "El valor de la cara obtenida es '$dado' y se veria asi en el dado:<br>";
switch ($dado) {
    case 1:
        echo '<img src=".\imagen_dado\1.png" alt="Uno">';
        break;
    case 2:
        echo '<img src=".\imagen_dado\2.png" alt="Dos">';
        break;
    case 3:
         echo '<img src=".\imagen_dado\3.png" alt="Tres">';
         break;
    case 4:
        echo '<img src=".\imagen_dado\4.png" alt="Cuatro">';
        break;
    case 5:
        echo '<img src=".\imagen_dado\5.png" alt="Cinco">';
        break;
    case 6:
        echo '<img src=".\imagen_dado\6.png" alt="Seis">';
        break;
/*Para contemplar algun error:
    default:
        echo "Se ha producido un error";
*/
    }
?>

