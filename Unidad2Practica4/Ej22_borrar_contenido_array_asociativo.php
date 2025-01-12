<?php
/* Crea un array con los siguientes valores: 5->1, 12->2, 13->56, x->42. 
Muestra el contenido. 
Cuenta el número de elementos que tiene y muéstralo por pantalla. 
Borra el contenido de posición 5. 
Vuelve a mostrar el contenido y por último elimina el array.*/ 


// Crear el array asociativo
$array = [
    5 => 1,
    12 => 2,
    13 => 56,
    "x" => 42
];

// Mostrar el contenido inicial del array
echo "<h3>Contenido inicial del array:</h3>";
print_r($array);
echo "<br>";

// Contar el número de elementos en el array
echo "<h3>Número de elementos en el array:</h3>";
echo count($array) . "<br>";

// Borrar el contenido de la posición 5
unset($array[5]);

// Mostrar el contenido del array después de borrar la posición 5
echo "<h3>Contenido del array después de borrar la posición 5:</h3>";
print_r($array);
echo "<br>";

// Eliminar completamente el array
unset($array);

// Intentar mostrar el array después de eliminarlo
echo "<h3>Array eliminado:</h3>";
if (!isset($array)) {
    echo "El array ha sido eliminado.<br>";
}
?>
