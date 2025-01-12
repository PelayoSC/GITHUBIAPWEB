<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suma = 0;
    $valores = []; // Creamos un array para almacenar los valores enviados

    // Recorremos los valores enviados en el formulario
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["e$i"])) {
            $valor = (float)$_POST["e$i"]; // Convertimos a float para sumar correctamente
            $suma += $valor; // Sumamos el valor
            $valores[] = $valor; // Almacenamos el valor en el array
        }
    }

    // Mostramos la suma total
    echo "<h2>La suma total de los elementos del array es: $suma</h2>";

    // Mostramos los valores del array
    echo "<h3>El array introducido es:</h3>";
    echo "<ul>";
    foreach ($valores as $indice => $valor) {
        echo "<li>Elemento $indice: $valor</li>";
    }
    echo "</ul>";
} else {
    echo "<h2>Por favor, envíe el formulario primero.</h2>";
}
?>
