<?php
/*Crea un array multidimensional para poder guardar los componentes de dos 
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el 
padre, la madres y los hijos, donde padre, madre e hijos serán los índices y los 
índices y los nombres serán los valores. Esta estructura se ha de crear en un solo 
array asociativo de tres dimensiones.
Muestra los valores de las dos familias en una lista no numerada */

// Creación del array multidimensional
$familias = [
    "Los Simpson" => [
        "padre" => "Homer",
        "madre" => "Marge",
        "hijos" => ["Bart", "Lisa", "Maggie"]
    ],
    "Los Griffin" => [ 
        "padre" => "Peter",
        "madre" => "Lois",
        "hijos" => ["Chris", "Meg", "Stewie"]
    ]
];


foreach ($familias as $nombreFamilia => $miembros) {
    echo "<strong>Familia $nombreFamilia:</strong><br>";
    echo "Padre: " . $miembros['padre'] . "<br>";
    echo "Madre: " . $miembros['madre'] . "<br>";
    echo "Hijos:<br>";
    foreach ($miembros['hijos'] as $hijo) {
        echo "- $hijo<br>";
    }
    echo "<br>";
}

// Mostrar los valores de las dos familias en una lista no numerada
echo "<h3>Familias:</h3>";
echo "<ul>";
foreach ($familias as $familia => $miembros) {
    echo "<li><strong>$familia:</strong>";
    echo "<ul>";
    foreach ($miembros as $rol => $valor) {
        if (is_array($valor)) {
            // Si es un array (hijos), mostrar los nombres separados por comas
            echo "<li>$rol: " . implode(", ", $valor) . "</li>";
        } else {
            // Si no es un array (padre o madre), mostrar el valor directamente
            echo "<li>$rol: $valor</li>";
        }
    }
    echo "</ul></li>";
}
echo "</ul>";

// Mostrar los valores de las dos familias en una lista numerada
echo "<h3>Familias:</h3>";
echo "<ol>";
foreach ($familias as $familia => $miembros) {
    echo "<li><strong>$familia:</strong>";
    echo "<ol>";
    foreach ($miembros as $rol => $valor) {
        if (is_array($valor)) {
            // Si es un array (hijos), mostrar los nombres separados por comas
            echo "<li>$rol: " . implode(", ", $valor) . "</li>";
        } else {
            // Si no es un array (padre o madre), mostrar el valor directamente
            echo "<li>$rol: $valor</li>";
        }
    }
    echo "</ol></li>";
}
echo "</ol>";
?>