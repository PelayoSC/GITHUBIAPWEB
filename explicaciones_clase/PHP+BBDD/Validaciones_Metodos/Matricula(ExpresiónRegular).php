<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];

    // Expresión regular para validar matrículas españolas (formato: 0000XXX)
    $matricula_regex = "/^[0-9]{4}[A-Z]{3}$/";
    

    // Validar la matrícula
    if (preg_match($matricula_regex, $matricula)) {
        // Si la matrícula es válida, mostrar los datos
        echo "<table>
                <tr><th>Matrícula</th><td>" . htmlspecialchars($matricula) . "</td></tr>
              </table>";
    } else {
        // Si la matrícula no es válida, mostrar un mensaje de error
        echo "Matrícula no válida. Debe seguir el formato 0000XXX.";
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validación de Matrícula</title>
    </head>
    <body>
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

            <label for="matricula">Matrícula:</label><br>
            <input type="text" id="matricula" name="matricula" required disabled><br><br>
    
            <button type="submit">Enviar</button>
        </form>
    </body>
    </html>

<?php
}
?>