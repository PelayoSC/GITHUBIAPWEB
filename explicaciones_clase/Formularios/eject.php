<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["numero$i"])) {
            $suma += (float)$_POST["numero$i"];
        }
    }
    echo "<h2>La suma total de los números es: $suma</h2>";
} else {
    echo "<h2>Por favor, envíe el formulario primero.</h2>";
}
?>