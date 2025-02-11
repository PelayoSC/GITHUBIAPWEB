<?php
session_start();

include '../../conexion.php';

if ($mysqli->connect_error) {
    echo "Error de conexión: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idArticulo = $_POST['idArticulo'];
    $nombreArticulo = $_POST['nombreArticulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $unidades = $_POST['unidades'];


    $query = "UPDATE articulos SET nombreArticulo = '$nombreArticulo', descripcion = '$descripcion', precio = '$precio', unidades = '$unidades' WHERE idArticulo = $idArticulo";
    $result = $mysqli->query($query);

    if ($result) {
        echo "Artículo modificado correctamente.</br>";
        echo '<a href="../../menu.php">Menú</a><br>';
    } else {
        echo "No se pudo modificar el artículo.</br>";
        echo '<a href="../../menu.php">Menú</a><br>';
    }
}

$mysqli->close();
?>