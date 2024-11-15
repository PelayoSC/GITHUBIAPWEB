<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nombre'], $_GET['apellidos'], $_GET['puesto'])) {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_GET['nombre']);
    $apellidos = htmlspecialchars($_GET['apellidos']);
    $puesto = htmlspecialchars($_GET['puesto']);
    
    // Mostrar los datos ingresados
    echo "<h2>Datos Enviados:</h2>";
    echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
    echo "<p><strong>Apellidos:</strong> " . $apellidos . "</p>";
    echo "<p><strong>Puesto:</strong> " . $puesto . "</p>";
} else {
?>
    <!-- Formulario HTML -->
    <h2>Formulario de Información Personal</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="puesto">Puesto:</label><br>
        <input type="text" id="puesto" name="puesto" required><br><br>

        <input type="submit" value="Enviar">
    </form>
<?php
}
?>
