<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="ejecucion.php" method="POST">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="valor1" placeholder="Ingrese su usuario" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="valor2" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="form-group">
                <label for="telefono">Numero teléfono:</label>
                <input type="number" id="telefono" name="valor3" placeholder="Ingrese su número" required>
            </div>
            <button type="submit" class="btn" name="boton">Acceder</button>
        </form>
    </div>
</body>
</html>

