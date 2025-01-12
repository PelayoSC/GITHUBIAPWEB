<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Dinámico de Números</title>
</head>
<body>
    <h1>Introduce 10 números para calcular su suma</h1>
    <form method="POST" action="eject.php">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='text' name='numero$i' id='numero$i' required><br>";
        }
        ?>
        <br>
        <input type="submit" value="Calcular Suma">
    </form>
</body>
</html>