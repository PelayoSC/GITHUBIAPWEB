<?php

/*
Escribe un script PHP que permita ordenar el siguiente array asociativo:
array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
De forma ascendente ordenado por valor.
De forma ascendente ordenado por clave.
De forma descendente ordenado por valor.
De forma descendente ordenado por clave.
*/

$array = array("Antonio" => "31", "María" => "28", "Juan" => "29", "Pepe" => "27");

$ascendentePorValor = $array;
asort($ascendentePorValor);

$ascendentePorClave = $array;
ksort($ascendentePorClave);

$descendentePorValor = $array;
arsort($descendentePorValor);

$descendentePorClave = $array;
krsort($descendentePorClave);

echo "<h3>Array Original:</h3>";
echo "<pre>" . print_r($array, true) . "</pre>";

echo "<h3>Ordenado Ascendentemente por Valor:</h3>";
echo "<pre>" . print_r($ascendentePorValor, true) . "</pre>";

echo "<h3>Ordenado Ascendentemente por Clave:</h3>";
echo "<pre>" . print_r($ascendentePorClave, true) . "</pre>";

echo "<h3>Ordenado Descendentemente por Valor:</h3>";
echo "<pre>" . print_r($descendentePorValor, true) . "</pre>";

echo "<h3>Ordenado Descendentemente por Clave:</h3>";
echo "<pre>" . print_r($descendentePorClave, true) . "</pre>";

?>