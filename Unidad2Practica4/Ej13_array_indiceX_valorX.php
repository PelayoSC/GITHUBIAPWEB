<?php
/*  Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, 
Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el 
contenido del array haciendo un recorrido diciendo el valor correspondiente a 
cada índice, ejemplo:
La ciudad con el índice 1 tiene el nombre de Barcelona.*/


// Crear un array con las ciudades
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

// Recorrer el array y mostrar los valores junto con sus índices
foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el índice $indice tiene el nombre de $ciudad.<br>";
}
?>
