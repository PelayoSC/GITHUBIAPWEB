<?php
//Mostrar valores introducidos
echo "El contenido del usuario es: " . $_POST['numero1'] . " y " . $_POST['numero2'] . "<br>";

// Convertir los valores a números y sumar
$suma = $_POST['numero1'] + $_POST['numero2'];

// Mostrar la suma
echo "La suma de los dos contenidos es: " . $suma;
?>