<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Expresión regular para validar el nombre
    $nombre_regex = "/^[a-zA-Z ]*$/";

    // Validar el nombre y el correo electrónico
    if (preg_match($nombre_regex, $nombre) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si el nombre y el correo son válidos, mostrar los datos
        echo "<table>
                <tr><th>Nombre</th><td>" . htmlspecialchars($nombre) . "</td></tr>
                <tr><th>Apellidos</th><td>" . htmlspecialchars($apellidos) . "</td></tr>
                <tr><th>Telefono</th><td>" . htmlspecialchars($telefono) . "</td></tr>
                <tr><th>Email</th><td>" . htmlspecialchars($email) . "</td></tr>
              </table>";
    } else {
        // Si el nombre o el correo no son válidos, mostrar un mensaje de error
        echo "Nombre o correo electrónico no válido.";
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario PHP</title>
    </head>
    <body>
        <h1>Formulario Para Registrarse en una BBDD</h1>
        <form action="#" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellidos">Apellidos:</label><br>
            <input type="text" id="apellidos" name="apellidos" required><br>
            <label for="telefono">Telefono:</label><br>
            <input type="text" id="telefono" name="telefono" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
    <?php
}
?>