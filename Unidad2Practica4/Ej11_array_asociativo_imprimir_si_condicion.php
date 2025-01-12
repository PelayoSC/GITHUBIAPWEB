<?php
/* Realizar un programa que muestre las películas que se han visto. Crear un array 
que contenga los meses de enero, febrero, marzo y abril, asignando los valores
9,12,0 y 17 respectivamente. Si en alguno de los meses no se ha visto alguna 
película no ha de mostrar la información de ese mes*/

// Crear un array con los meses y el número de películas vistas
$peliculas = [
    "Enero" => 9,
    "Febrero" => 12,
    "Marzo" => 0,
    "Abril" => 17
];

// Mostrar el array completo
echo "Array completo de películas vistas por mes:<br>";
print_r($peliculas);
echo "<br>";

// Recorrer el array y mostrar solo los meses con películas vistas
echo "<br>Películas vistas por mes:<br>";
foreach ($peliculas as $mes => $cantidad) {
    if ($cantidad > 0) { // Mostrar solo si se han visto películas
        echo "$mes: $cantidad películas<br>";
    }
}
?>
