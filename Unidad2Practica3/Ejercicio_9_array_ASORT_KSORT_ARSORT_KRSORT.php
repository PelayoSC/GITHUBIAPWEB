<?php
/* Escribe un script PHP que permita ordenar el siguiente array asociativo:
array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
De forma ascendente ordenado por valor. - asort()
De forma ascendente ordenado por clave. - ksort()
De forma descendente ordenado por valor. - arsort()
De forma descendente ordenado por clave. - krsort()
*/

// Array asociativo original
$edades = array("Antonio" => "31", "María" => "28", "Juan" => "29", "Pepe" => "27");
//var_dump($edades);
echo "<h1>Funcion asort(), ksort(), arsort(), krsort().</h1>";
// Orden ascendente por valor
$edades;
asort($edades); // Ordena de menor a mayor según el valor
echo "<h2>Orden ascendente por valor:</h2>";
foreach ($edades as $nombre => $edad) {
    echo "$nombre: $edad<br>";
}

// Orden ascendente por clave
$edades;
ksort($edades); // Ordena de menor a mayor según la clave
echo "<h2>Orden ascendente por clave:</h2>";
foreach ($edades as $nombre => $edad) {
    echo "$nombre: $edad<br>";
}

// Orden descendente por valor
$edades;
arsort($edades); // Ordena de mayor a menor según el valor
echo "<h2>Orden descendente por valor:</h2>";
foreach ($edades as $nombre => $edad) {
    echo "$nombre: $edad<br>";
}

// Orden descendente por clave
$edades;
krsort($edades); // Ordena de mayor a menor según la clave
echo "<h2>Orden descendente por clave:</h2>";
foreach ($edades as $nombre => $edad) {
    echo "$nombre: $edad<br>";
}
?>
