<?php
/*  Muestra el array del ejercicio anterior pero en orden inverso. */


// Rellenar los tres arrays
$array1 = ["Lagartija", "Araña", "Perro", "Gato", "Ratón"];
$array2 = ["12", "34", "45", "52", "12"];
$array3 = ["Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"];

// Crear un nuevo array vacío
$array_unido = [];

// Usar array_push para agregar los elementos de los tres arrays al nuevo array
array_push($array_unido, ...$array1); // Agregar los elementos de $array1
array_push($array_unido, ...$array2); // Agregar los elementos de $array2
array_push($array_unido, ...$array3); // Agregar los elementos de $array3

// Invertir el array combinado
$array_inverso = array_reverse($array_unido);

// Mostrar el array combinado en orden inverso
echo "Array combinado en orden inverso:<br>";
print_r($array_inverso);
?>

