<?php
/*  Realiza el ejercicio anterior pero con la funicón array_push(). */ 

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

// Mostrar el array combinado
echo "Array combinado:<br>";
print_r($array_unido);

echo "<br>Array combinado:<br>";
var_dump($array_unido);
?>
