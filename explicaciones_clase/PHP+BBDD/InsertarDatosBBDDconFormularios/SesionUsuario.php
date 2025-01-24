<?php

session_start();

echo "Hola " . $_SESSION['$n'] . "<br>";
echo "Tu edad es: " . $_SESSION['$i'] . "<br>";

$mysqli = new mysqli("127.0.0.1", "root", "", "pruebaiapweb");
$result = $mysqli->query("SELECT * FROM usuarios WHERE nombre = '" . $_SESSION['$n'] . "'");

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

?>