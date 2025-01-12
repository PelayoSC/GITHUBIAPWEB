<?php
/* Crea un array asociativo para introducir los datos de una persona
Nombre: Pedro Torres
Dirección: C/Mayor, 37
Teléfono: 123456789
Al acabar muestra los datos por pantalla.
*/

// Crear un array asociativo con los datos de la persona
$persona = [
    "Nombre" => "Pedro Torres",
    "Dirección" => "C/Mayor, 37",
    "Teléfono" => "123456789"
];

// Mostrar los datos por pantalla
echo "Datos de la persona:<br>";
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>
