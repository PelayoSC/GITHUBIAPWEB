<?php
/*  Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu 
mismo los valores, poniendo índices alfanuméricos a cada valor con tres 
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y 
muéstralo por pantalla en una tabla. */ 


// Crear el array "lenguajes_cliente" con índices alfanuméricos
$lenguajes_cliente = [
    "CLI1" => "HTML",
    "CLI2" => "CSS",
    "CLI3" => "JavaScript"
];

// Crear el array "lenguajes_servidor" con índices alfanuméricos
$lenguajes_servidor = [
    "SRV1" => "PHP",
    "SRV2" => "Python",
    "SRV3" => "Java"
];

// Unir ambos arrays en uno llamado "lenguajes"
$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

// Mostrar el array "lenguajes" en una tabla HTML
echo "<table border='1' style='border-collapse: collapse; text-align: left;'>";
echo "<tr>
        <th>Índice</th>
        <th>Lenguaje</th>
    </tr>";

foreach ($lenguajes as $indice => $lenguaje) {
    echo "<tr>
            <td>$indice</td>
            <td>$lenguaje</td>
        </tr>";
}

echo "</table>";
?>
