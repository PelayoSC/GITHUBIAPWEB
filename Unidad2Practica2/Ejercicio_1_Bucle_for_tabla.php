<?php
/* Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 
columnas. Utiliza un bucle for*/

//En este caso metemos el html dentro del php con etiqueta echo. 
//A partir del ejercicio 4 el codigo php tiene el html embebido.

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números del 1 al 10</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Tabla que muestre los números del 1 al 10 en 1 fila y 10 columnas:</h3>
    <table>
        <tr>';
        
for ($i = 1; $i <= 10; $i++) {
    echo "<td>$i</td>";
}

echo '        </tr>
    </table>
</body>
</html>';

