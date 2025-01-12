<?php
/* Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen 
con los valores obtenidos en cada uno de los dados
*/
$dado1 = rand (1, 6);
$dado2 = rand (1, 6);
echo "El valor de la caras obtenidas en el primer dado es <b>$dado1</b> y en el segundo dado es <b>$dado2</b> y se verian asi:<br>";
switch ($dado1) {
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
    }
    switch ($dado2) {
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
        }
?>