<?php
/* Implementa un array asociativo con los siguientes valores y ordénalo de menor a 
mayor. Muestra los valores en una tabla.
$numeros=array(3,2,8,123,5,1) */

// Crear el array asociativo
$numeros = [
    "a" => 3,
    "b" => 2,
    "c" => 8,
    "d" => 123,
    "e" => 5,
    "f" => 1
];

// Ordenar el array de menor a mayor por valores
asort($numeros); // asort() mantiene la relación índice-valor

// Mostrar el array ordenado en una tabla HTML
echo "<h3>Array ordenado de menor a mayor</h3>";
echo "<table border='1' style='border-collapse: collapse; text-align: left;'>";
echo "<tr>
        <th>Índice</th>
        <th>Valor</th>
    </tr>";
foreach ($numeros as $indice => $valor) {
    echo "<tr>
            <td>$indice</td>
            <td>$valor</td>
        </tr>";
}
echo "</table>";

// Ordenar el array de mayor a menor por valores
arsort($numeros); // arsort() mantiene la relación índice-valor

// Mostrar el array ordenado en una tabla HTML
echo "<h3>Array ordenado de mayor a menor</h3>";
echo "<table border='1' style='border-collapse: collapse; text-align: left;'>";
echo "<tr>
        <th>Índice</th>
        <th>Valor</th>
    </tr>";
foreach ($numeros as $indice => $valor) {
    echo "<tr>
            <td>$indice</td>
            <td>$valor</td>
        </tr>";
}
echo "</table>";
?>
