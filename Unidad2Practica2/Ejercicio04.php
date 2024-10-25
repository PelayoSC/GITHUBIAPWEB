<?php
/*
4. Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un 
bucle for*/


$numero = rand(1, 10);

echo "<h3>Tabla de multiplicar del número $numero</h3>";
echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
}

echo "</table>";
?>