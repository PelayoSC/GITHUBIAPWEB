<?php

/*
Crea un array multidimensional para poder guardar los componentes de dos 
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el 
padre, la madres y los hijos, donde padre, madre e hijos serán los índices y los 
índices y los nombres serán los valores. Esta estructura se ha de crear en un solo 
array asociativo de tres dimensiones.
Muestra los valores de las dos familias en una lista no numerada.
*/

$familias = [
    "Los Simpson" => [
        "padre" => "Homer",
        "madre" => "Marge",
        "hijos" => ["Bart", "Lisa", "Maggie"]
    ],
    "Los Griffin" => [
        "padre" => "Peter",
        "madre" => "Lois",
        "hijos" => ["Meg", "Chris", "Stewie"]
    ]
];

foreach ($familias as $familia => $miembros) {
    echo "<ul>";
    echo "<li><strong>$familia</strong></li>";
    echo "<ul>";
    foreach ($miembros as $rol => $personas) {
        if (is_array($personas)) {
            echo "<li>$rol: " . implode(", ", $personas) . "</li>";
        } else {
            echo "<li>$rol: $personas</li>";
        }
    }
    echo "</ul></ul>";
}
?>