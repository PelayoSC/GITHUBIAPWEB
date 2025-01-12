<?php
/*
Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje 
indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 2 martes, etc.
Notas:
Documentación de la estructura de control switch.
*/
$dia = rand (1, 7);
echo "<h2>Ejercicio días de la semana:</h2>";
echo "El valor del día es <b>$dia</b> y corresponde al día de la semana: ";
switch ($dia) {
    case 1:
        echo '<b>Lunes</b>';
        break;
    case 2:
        echo '<b>Martes</b>';
        break;
    case 3:
         echo '<b>Miercoles</b>';
         break;
    case 4:
        echo '<b>Jueves</b>';
        break;
    case 5:
        echo '<b>Viernes</b>';
        break;
    case 6:
        echo '<b>Sabado</b>';
        break;
    case 7:
        echo '<b>Domingo</b>';
        break;
    }
/*Para contemplar algun error:
    default:
        echo "Se ha producido un error";
*/
?>
