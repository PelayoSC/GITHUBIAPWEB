<?php

/*
Crea el código que dé respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una 
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos 
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma.
*/

$niveles = ["Básico", "Medio", "Perfeccionamiento"];
$idiomas = ["Inglés", "Francés", "Alemán", "Ruso"];
$alumnos = [
    [10, 5, 2, 8], // Nivel básico
    [7, 6, 4, 3],  // Nivel medio
    [3, 2, 1, 5]   // Nivel perfeccionamiento
];

foreach ($alumnos as $nivel => $idioma) {
    foreach ($idioma as $columna => $cantidad) {
        echo "Nivel {$niveles[$nivel]} en {$idiomas[$columna]}: $cantidad alumnos.<br>";
    }
}
?>
