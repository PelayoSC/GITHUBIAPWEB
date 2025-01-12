<?php
/*Crea el código que dé respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una 
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos 
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma.*/


// Matriz de alumnos: filas representan los niveles, columnas representan los idiomas
$alumnos = [
    [14, 8, 3, 19],  // Nivel básico: Inglés, Francés, Alemán, Ruso
    [6, 19, 7, 2],   // Nivel medio
    [3, 13, 4, 1]    // Nivel perfeccionamiento
];

// Arrays descriptivos para niveles e idiomas
$niveles = ["Básico", "Medio", "Perfeccionamiento"];
$idiomas = ["Inglés", "Francés", "Alemán", "Ruso"];

// Recorrer la matriz y mostrar los valores
foreach ($alumnos as $nivel => $fila) {
    echo "Nivel: " . $niveles[$nivel] . "<br>";
    foreach ($fila as $idioma => $cantidad) {
        echo "- Idioma: " . $idiomas[$idioma] . " => " . $cantidad . " alumnos<br>";
    }
    echo "\n"; // Espacio entre niveles
}
?>