<?php
/*
3. Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje 
indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 2 martes, etc.
*/

$dia = rand(1, 7);


switch ($dia) {
    case 1:
        $nombre = "lunes";
        break;
    case 2:
        $nombre = "martes";
        break;
    case 3:
        $nombre = "miércoles";
        break;
    case 4:
        $nombre = "jueves";
        break;
    case 5:
        $nombre = "viernes";
        break;
    case 6:
        $nombre = "sabado";
        break;
    case 7:
        $nombre = "domingo";
        break;
}


echo "<h1>Hoy es $nombre ($dia)</h1>";
?>