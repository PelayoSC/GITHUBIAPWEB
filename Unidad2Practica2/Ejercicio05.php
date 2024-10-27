<?php
/*
5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for
*/

echo "<table border='1'>";

for ($numero = 1; $numero <= 10; $numero++) {
    echo "<tr><th colspan='2'>Tabla del $numero</th></tr>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
    }
}

echo "</table>";

?>