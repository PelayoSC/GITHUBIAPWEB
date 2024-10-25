<?php
/*
2. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una columna y 10 
filas. Utiliza un bucle for*/

echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>$i</td></tr>";
}
echo "</table>";
?>
