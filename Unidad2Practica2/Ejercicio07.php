<?php
/*
7. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 
columnas. Utiliza un bucle while
*/

echo "<table border='1'><tr>";

$i = 1;
do {
    echo "<td>$i</td>";
    $i++;
} while ($i <= 10);

echo "</tr></table>";

?>