<?php
session_start();

$n = $_POST['usuario'];
$i = $_POST['edad'];
$p = $_POST['contraseña'];
$e = $_POST['email'];

$_SESSION['$n'] = $n;
$_SESSION['$i'] = $i;

$mysqli = new mysqli("127.0.0.1", "root", "", "pruebaiapweb");

$mysqli->query("insert into usuarios(nombre, edad, contraseña, email) values ('$n', $i, '$p', '$e')");
$result = $mysqli->query("SELECT * FROM usuarios");

echo "<table border='1'>
<tr>
<th>Nombre</th>
<th>Edad</th>
<th>Contraseña</th>
<th>Email</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['edad'] . "</td>";
    echo "<td>" . $row['contraseña'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo '<a href="SesionUsuario.php">Ir a la información del usuaio</a>';

$mysqli->close();
?>