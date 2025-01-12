<?php
/* Implementa un array asociativo con los siguientes valores:
1 Muestra los valores del array en una tabla, has de mostrar el índice y el valor 
asociado.
2 Elimina el estadio asociado al Real Madrid. 
3 Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta  
vez en una lista numerada  */

// Crear el array asociativo
$estadios_futbol = [
    "Barcelona" => "Camp Nou",
    "Real Madrid" => "Santiago Bernabéu",
    "Valencia" => "Mestalla",
    "Real Sociedad" => "Anoeta"
];

// Paso 1: Mostrar los valores del array en una tabla
echo "<h3>Estadios de Fútbol</h3>";
echo "<table border='1' style='border-collapse: collapse; text-align: left;'>";
echo "<tr>
        <th>Equipo</th>
        <th>Estadio</th>
    </tr>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<tr>
            <td>$equipo</td>
            <td>$estadio</td>
        </tr>";
}
echo "</table>";

// Paso 2: Eliminar el estadio asociado al Real Madrid
unset($estadios_futbol["Real Madrid"]);

// Paso 3: Mostrar los valores restantes en una lista numerada
echo "<h3>Estadios restantes (Lista Numerada) </h3>";
echo "<ol>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<li>$equipo: $estadio</li>";
}
echo "</ol>";

// Paso 4: Mostrar los valores restantes en una lista no numerada
echo "<h3>Estadios restantes (Lista No Numerada)</h3>";
echo "<ul>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<li>$equipo: $estadio</li>";
}
echo "</ul>";

?>
