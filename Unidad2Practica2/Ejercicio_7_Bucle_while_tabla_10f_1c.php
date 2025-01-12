<?php
/* Escribe un script PHP que muestre los números del 1 al 10 en una tabla de 10 filas y 1 columna. 
Utiliza un bucle do-while*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Bucle Do-While</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            text-align: center;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Tabla de 10 Filas y 1 Columna con Bucle Do-While</h1>
    <?php
    echo "<table>"; // Abrir la tabla
    $i = 1;
    do {
        echo "<tr>"; // Comenzar una nueva fila
        echo "<td>$i</td>"; // Crear una celda con el valor de $i
        echo "</tr>"; // Cerrar la fila
        $i++; // Incrementar el contador
    } while ($i <= 10);
    echo "</table>"; // Cerrar la tabla
    ?>
</body>
</html>