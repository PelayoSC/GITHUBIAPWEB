<?php
$fruits = array (
    "frutas"  => array("a" => "naranja", "b" => "plátano", "c" => "manzana"),
    "números" => array(1, 2, 3, 4, 5, 6),
    "hoyos"   => array("primero", 5 => "segundo", "tercero")
);

//var_dump($fruits);
echo ("<h3>El contenido de este array() es:</h3>");
foreach($fruits as $indice => $contenido){
    echo ("$indice:<br>");
    foreach ($contenido as $indice2 => $contenido2){
    echo ("&nbsp&nbsp$indice2 = $contenido2<br>");}
}
?>