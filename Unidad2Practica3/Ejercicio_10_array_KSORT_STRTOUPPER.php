<?php
/* Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. El 
resultado deberá seguir el siguiente patrón:
La capital de ITALIA es ROMA
Tenga en cuenta que tendrá que utilizar una función para convertir las claves y los valores 
del array en mayúscula.
array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> 
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => 
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => 
"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => 
"Vienna", "Poland"=>"Warsaw")
*/
echo "<h1>Funciones array(), ksort(), strtoupper().</h1>";
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

// Ordenar el array por clave (país) en orden ascendente
ksort($capitales);

// Mostrar el array en el formato solicitado
foreach ($capitales as $pais => $capital) {
    echo "- La capital de " . strtoupper($pais) . " es " . strtoupper($capital) . ".<br>";
}
?>