<?php
session_start();

include 'conexion.php';

if ($mysqli->connect_error) {
    echo "Error de conexión: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idArticulo = $_POST['idArticulo'];


    $query = "DELETE FROM articulos WHERE idArticulo = $idArticulo";
    $result = $mysqli->query($query);

    if ($result) {
        echo "Artículo eliminado correctamente.</br>";
        echo '<a href="../../menu.php">Menú</a><br>';
    } else {
        echo "No se pudo eliminado el artículo.</br>";
        echo '<a href="../../menu.php">Menú</a><br>';
    }
}

$mysqli->close();
?>