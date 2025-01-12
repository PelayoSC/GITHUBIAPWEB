<?php
//(A AND B) OR (A AND C) OR (A AND D)
//tabla de verdad en word explicación PHP. Condición con AND y OR
$x = 10;
$j = 5;
$t = 8;
echo "<b> Condicion con AND y OR en el codigo: </b><br>";
if ((($x<7)AND($j>3))OR(($x<7)AND($t>4))OR(($x<7)AND($t>5)))
    {
    echo "Para los valores x=$x, j=$j y t=$t la condición es VERDADERA."; //si el resultado es cierto.
    }
else {echo "Para los valores x=$x, j=$j y t=$t la condición es FALSA.<br><br>"; //si el resultado es falso.
    }
?>
<?php
$x = 10;
$j = 5;
$t = 8;
echo "<b>Misma condición pero con valores && || en vez de AND y OR en el codigo: </b><br>";
if ((($x<7)&&($j>3))||(($x<7)&&($t>4))||(($x<7)||($t>5)))
    {
    echo "Para los valores x=$x, j=$j y t=$t la condición es VERDADERA."; //si el resultado es cierto.
    }
else {echo "Para los valores x=$x, j=$j y t=$t la condición es FALSA."; //si el resultado es falso.
    }
?>