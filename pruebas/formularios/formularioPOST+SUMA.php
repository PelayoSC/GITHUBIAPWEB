<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $numero1 = htmlspecialchars($_POST['numero1']);
    $numero2 = htmlspecialchars($_POST['numero2']);
    $suma = $numero1 + $numero2;
    
    // Mostrar los datos ingresados
    echo "<h2>Datos Enviados:</h2>";
    echo "<p><strong>Nombre:</strong> " . $numero1 . "</p>";
    echo "<p><strong>Apellidos:</strong> " . $numero2 . "</p>";
    echo "<p><strong>Resultado:</strong> " . $suma . "</p>";
} else {
?>
    <!-- Formulario HTML -->
    <h2>Formulario de Información Personal</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="numero1">numero1</label><br>
        <input type="text" id="numero1" name="numero1" required><br><br>

        <label for="numero2">numero2</label><br>
        <input type="text" id="numero2" name="numero2" required><br><br>

        <input type="submit" value="Enviar">
    </form>
<?php
}
?>