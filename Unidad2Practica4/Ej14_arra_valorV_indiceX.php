<?php
/* epite el ejercicio anterior pero ahora si se han de crear índices asociativos, 
ejemplo:
El índice del array que contiene como valor Madrid es MD. */

// Crear un array asociativo con índices personalizados
$ciudades = [
    "MD" => "Madrid",
    "BC" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CH" => "Chicago"
];

// Recorrer el array y mostrar los índices asociativos y sus valores
foreach ($ciudades as $indice => $ciudad) {
    echo "El índice del array que contiene como valor $ciudad es $indice.<br>";
}
?>

