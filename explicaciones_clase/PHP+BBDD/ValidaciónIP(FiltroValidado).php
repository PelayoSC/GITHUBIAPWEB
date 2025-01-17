<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $ip = $_POST['ip'];

    // Expresión regular para validar el nombre
    $nombre_regex = "/^[a-zA-Z ]*$/";

    // Validar el nombre, el correo electrónico y la IP
    if (preg_match($nombre_regex, $nombre) && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($ip, FILTER_VALIDATE_IP)) {
        // Si el nombre, el correo y la IP son válidos, mostrar los datos
        echo "<table>
                <tr><th>Nombre</th><td>" . htmlspecialchars($nombre) . "</td></tr>
                <tr><th>Apellidos</th><td>" . htmlspecialchars($apellidos) . "</td></tr>
                <tr><th>Teléfono</th><td>" . htmlspecialchars($telefono) . "</td></tr>
                <tr><th>Email</th><td>" . htmlspecialchars($email) . "</td></tr>
                <tr><th>IP</th><td>" . htmlspecialchars($ip) . "</td></tr>
              </table>";
    } else {
        // Si el nombre, el correo o la IP no son válidos, mostrar un mensaje de error
        echo "Nombre, correo electrónico o IP no válidos.";
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
            <input type="text" id="nombre" name="nombre" required><br><br>
    
            <label for="apellidos">Apellidos:</label><br>
            <input type="text" id="apellidos" name="apellidos" required><br><br>
    
            <label for="telefono">Teléfono:</label><br>
            <input type="tel" id="telefono" name="telefono" required><br><br>
    
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="ip">IP:</label><br>
            <input type="text" id="ip" name="ip" required><br><br>
    
            <button type="submit">Enviar</button>
        </form>
    </body>
    </html>

<?php
}
?>