<?php
/* Escribe un script PHP que convierta el array del ejercicio anterior en un objeto JSON.*/

// Array asociativo de países y capitales
$capitales = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", 
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", 
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", 
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", 
    "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
);

// Convertir el array a JSON
$jsonCapitales = json_encode($capitales);

// Mostrar el objeto JSONs
echo $jsonCapitales;
?>
