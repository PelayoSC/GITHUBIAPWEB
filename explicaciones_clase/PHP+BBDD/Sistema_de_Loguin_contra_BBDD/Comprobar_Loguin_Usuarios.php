<?php
session_start();

$n = $_POST['usuario'];
$p = $_POST['contraseña'];

$_SESSION['$n'] = $n;
$_SESSION['$p'] = $p;

include 'conexion.php';

$result = $mysqli->query("SELECT * FROM usuarios WHERE nombre = '$n' AND contraseña = '$p'");

if($result->num_rows > 0) {
    header('Location: menu.php');
} else {
    echo 'Fallo de Loguin<br>';
    echo '<a href="Formulario_Registro.html">Registrarse</a>';
}

$mysqli->close();
?>