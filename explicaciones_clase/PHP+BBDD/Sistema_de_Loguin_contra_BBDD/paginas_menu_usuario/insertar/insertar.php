<?php
session_start();

echo '<h1>Gracias por su nueva inserción ' . $_SESSION['$n'] . '</h1>';

$a = $_POST['nombreArticulo'];
$i = $_POST['descripcion'];
$p = $_POST['precio'];
$e = $_POST['unidades'];

include 'conexion.php';

$mysqli->query("insert into articulos(nombreArticulo, descripcion, precio, unidades) values ('$a', '$i', $p, $e)");
$result = $mysqli->query("SELECT * FROM articulos");

echo "<table border='1'>
<tr>
<th>nombreArticulo</th>
<th>descripcion</th>
<th>precio</th>
<th>unidades</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nombreArticulo'] . "</td>";
    echo "<td>" . $row['descripcion'] . "</td>";
    echo "<td>" . $row['precio'] . "</td>";
    echo "<td>" . $row['unidades'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$mysqli->close();

echo '<a href="../../menu.php">Menú</a><br>';

?>