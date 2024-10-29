<?php
/* 5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for */

echo '<h2>Tablas de multiplicar del 1 al 10</h2>';

// Bucle para las tablas del 1 al 10
for ($numero = 1; $numero <= 10; $numero++) {
    echo "<div style='display: inline-block; margin: 10px; vertical-align: top;'>"; //Contenedor para cada tabla
    echo "<h3>Tabla de multiplicar del $numero</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Multiplicación</th><th>Resultado</th></tr>";

    // Bucle para multiplicar cada número del 1 al 10
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
    }

    echo "</table>";
    echo "</div>";
}
?>