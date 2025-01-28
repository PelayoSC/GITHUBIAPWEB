<?php
session_start();

$n = $_POST['usuario'];
$p = $_POST['contraseña'];

$_SESSION['$n'] = $n;
$_SESSION['$p'] = $p;

$mysqli = new mysqli("127.0.0.1", "root", "", "pruebaiapweb");

$result = $mysqli->query("SELECT * FROM usuarios WHERE nombre = '$n' AND contraseña = '$p'");

if($result->num_rows > 0) {
    header('Location: PAGINA_PRINCIPAL.php');
} else {
    echo '<a href="Formulario.html">Fallo de Loguin</a>';
    echo '<br>';
    echo '<a href="Formulario_Registro.html">Registrarse</a>';
}

$mysqli->close();
?>