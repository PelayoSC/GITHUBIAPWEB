<?php
/*  Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. 
Los valores serán los siguientes:
Haz un recorrido del array multidimensional mostrando los valores de tal manera 
que nos muestre en cada ciudad que amigos tiene. */


// Crear una matriz para guardar amigos clasificados por ciudades
$amigos = [
    "Madrid" => [
        "nombre" => "Pedro",
        "edad" => 32,
        "teléfono" => "91-999.99.99"
    ],
    "Barcelona" => [
        "nombre" => "Susana",
        "edad" => 34,
        "teléfono" => "93-000.00.00"
    ],
    "Toledo" => [
        "nombre" => "Sonia",
        "edad" => 42,
        "teléfono" => "925-09.09.09"
    ]
];

// Mostrar los amigos clasificados por ciudades
echo "<h3>Amigos clasificados por ciudades:</h3>";
foreach ($amigos as $ciudad => $detalles) {
    echo "<strong>En $ciudad:</strong><br>";
    echo "Nombre: " . $detalles["nombre"] . "<br>";
    echo "Edad: " . $detalles["edad"] . "<br>";
    echo "Teléfono: " . $detalles["teléfono"] . "<br><br>";
}
?>
