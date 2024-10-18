<?php
$x = 10;
$j = 5;
$t = 8;

if ((($x < 7) && ($j > 3)) || (($x < 7) && ($t > 4)) || (($x < 7) || ($t < 5))) {
    echo "Para los valores $x, $j, $t el resultado de la condición es Verdadera";
} else {
    echo "Para los valores $x, $j, $t el resultado de la condición es Falsa";
}
?>
