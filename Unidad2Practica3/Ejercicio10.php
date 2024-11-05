<?php

/*
 Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. El 
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
"Vienna", "Poland"=>"Warsaw");
*/

$array = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallinn",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valletta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

ksort($array);

function convertirAMayusculas($array) {
    $nuevoArray = [];
    foreach ($array as $clave => $valor) {
        $nuevoArray[strtoupper($clave)] = strtoupper($valor);
    }
    return $nuevoArray;
}

$arrayMayusculas = convertirAMayusculas($array);

foreach ($arrayMayusculas as $pais => $capital) {
    echo "La capital de $pais es $capital.<br>";
}

?>