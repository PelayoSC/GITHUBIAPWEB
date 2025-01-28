<?php

$n = $_POST['usuario'];
$i = $_POST['edad'];
$p = $_POST['contraseña'];
$e = $_POST['email'];

$mysqli = new mysqli("127.0.0.1", "root", "", "pruebaiapweb");
$comprobacion = $mysqli->query("SELECT * FROM usuarios WHERE nombre = '$n' AND contraseña = '$p'");

if($comprobacion->num_rows > 0) {
    echo "Este usuario ya está registrado";

} else {
    $mysqli->query("insert into usuarios(nombre, edad, contraseña, email) values ('$n', $i, '$p', '$e')");
    echo "Usuario registrado con exito";
}
    $mysqli->close();
?>