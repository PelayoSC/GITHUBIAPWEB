<?php

/*
Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu 
mismo los valores, poniendo índices alfanuméricos a cada valor con tres 
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y 
muéstralo por pantalla en una tabla.
*/

$lenguajes_cliente = [
    "HTML" => "HTML",
    "CSS" => "CSS",
    "JS" => "JavaScript"
];
$lenguajes_servidor = [
    "PHP" => "PHP",
    "PY" => "Python",
    "JS" => "NodeJS"
];

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Valor</th></tr>";
foreach ($lenguajes as $indice => $valor) {
    echo "<tr><td>$indice</td><td>$valor</td></tr>";
}
echo "</table>";
?>