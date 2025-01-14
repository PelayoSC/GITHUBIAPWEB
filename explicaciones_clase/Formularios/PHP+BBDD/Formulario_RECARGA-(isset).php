<?php

if (isset($_POST['nombre'])){
?>

<table>
    
    <tr>
        <th>Nombre</th>
        <td><?php echo "$_POST[nombre]" ?></td>
    </tr>
    <tr>
        <th>Apellidos</th>
        <td><?php echo "$_POST[apellidos]" ?></td>
    </tr>
        <tr>
        <th>telefono</th>
        <td><?php echo "$_POST[telefono]" ?></td>
    </tr>
    </tr>
        <tr>
        <th>email</th>
        <td><?php echo "$_POST[email]" ?></td>
    </tr>
</table>

<?php
}else{
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
    
            <button type="submit">Enviar</button>
        </form>
    </body>
    </html>

<?php
}
?>
