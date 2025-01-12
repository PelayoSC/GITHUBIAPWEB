<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="ejecución.php" method="GET">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit" class="btn" name="boton">Acceder</button>
        </form>
    </div>

</body>
</html>

<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Aquí puedes añadir la lógica para validar usuario y contraseña
    // Por ejemplo, comparar con datos almacenados en una base de datos

    if ($username === 'admin' && $password === '1234') {
        echo '<script>alert("¡Inicio de sesión exitoso!");</script>';
    } else {
        echo '<script>alert("Usuario o contraseña incorrectos");</script>';
    }
}
?>