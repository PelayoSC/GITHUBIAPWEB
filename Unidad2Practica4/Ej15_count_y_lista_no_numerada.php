<?php
/* Crea un array con los nombre Pedro, Ismael, Sonia, Clara, Susana, Alfonso y 
Teresa. Muestra el número de elementos que contiene y cada elemento en una 
lista no numerada de html.*/

// Crear un array con los nombres
$nombres = ["Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa"];

// Mostrar el número de elementos que contiene el array
echo "El número de elementos en el array es: " . count($nombres) . "<br>";

// Mostrar cada elemento en una lista no numerada
echo "<ul>";
foreach ($nombres as $nombre) {
    echo "<li>$nombre</li>";
}
echo "</ul>";
?>
