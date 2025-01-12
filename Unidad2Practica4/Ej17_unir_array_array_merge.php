<?php
/* Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por 
pantalla. Utiliza la función array_merge() */ 

// Rellenar los tres arrays
$array1 = ["Lagartija", "Araña", "Perro", "Gato", "Ratón"];
$array2 = ["12", "34", "45", "52", "12"];
$array3 = ["Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34"];

// Juntar los arrays en uno nuevo usando array_merge
$array_unido = array_merge($array1, $array2, $array3);

// Mostrar el array combinado
echo "Array combinado:<br>";
print_r($array_unido);

echo "<br>Array combinado:<br>";
var_dump($array_unido);
?>
