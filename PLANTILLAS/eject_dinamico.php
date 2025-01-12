<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inicializar variables
    $valores = [];
    $suma = 0;
    $resta = 0;

    // Recoger los valores enviados
    for ($i = 1; $i <= 10; $i++) {
        $campo = "n$i"; // Nombre dinámico del campo
        $valor = isset($_POST[$campo]) ? (float)$_POST[$campo] : 0; // Convertir a número
        $valores[] = $valor;
        $suma += $valor; // Calcular suma
        $resta = ($i === 1) ? $valor : $resta - $valor; // Calcular resta (primero asigna el primer valor)
    }

    // Calcular media
    $media = count($valores) > 0 ? $suma / count($valores) : 0;

    // Mostrar resultados
    echo "<h1>Resultados del Formulario</h1>";

    // Mostrar valores en formato tabla
    echo "<h2>Valores en formato tabla</h2>";
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
    echo "<tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>";
    foreach ($valores as $indice => $valor) {
        echo "<tr>
                <td>E" . ($indice + 1) . "</td>
                <td>$valor</td></tr>";
    }
    echo "</table>";

    // Mostrar valores en formato lista
    echo "<h2>Valores en formato lista</h2>";
    echo "<ul>";
    foreach ($valores as $indice => $valor) {
        echo "<li>Campo E" . ($indice + 1) . ": $valor</li>";
    }
    echo "</ul>";

    // Mostrar suma total
    echo "<h2>Suma Total</h2>";
    echo "<p>La suma de los valores es: <strong>$suma</strong></p>";

    // Mostrar resta total
    echo "<h2>Resta Total</h2>";
    echo "<p>La resta de los valores es: <strong>$resta</strong></p>";

    // Mostrar media
    echo "<h2>Media de los Valores</h2>";
    echo "<p>La media de los valores es: <strong>$media</strong></p>";
} else {
    // Mensaje si acceden directamente
    echo "<h1>Error</h1>";
    echo "<p>Por favor, acceda al formulario correctamente.</p>";
}
?>
