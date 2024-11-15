<?php

/*
Implementa un array asociativo con los siguientes valores:
- Muestra los valores del array en una tabla, has de mostrar el índice y el valor 
asociado
- Elimina el estadio asociado al Real Madrid.
- Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta 
vez en una lista numerada.
*/

$equipos = [
    "Real Madrid" => "Santiago Bernabéu",
    "Barcelona" => "Camp Nou",
    "Valencia" => "Mestalla",
    "Atlético de Madrid" => "Wanda Metropolitano"
];

// Mostrar en una tabla
echo "<table border='1'>";
echo "<tr><th>Equipo</th><th>Estadio</th></tr>";
foreach ($equipos as $equipo => $estadio) {
    echo "<tr><td>$equipo</td><td>$estadio</td></tr>";
}
echo "</table>";

// Eliminar el estadio del Real Madrid
unset($equipos["Real Madrid"]);

// Mostrar en una lista numerada
echo "<ol>";
foreach ($equipos as $equipo => $estadio) {
    echo "<li>$equipo - $estadio</li>";
}
echo "</ol>";
?>