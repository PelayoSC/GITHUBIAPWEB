<?php
/* Escribe un script PHP que muestre en una tabla los números pares que existen entre 1 y 100. 
Utiliza un bucle for.*/

//En este caso metemos el html dentro del php con etiqueta echo. 
//A partir del ejercicio 4 el codigo php tiene el html embebido.
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares del 1 al 100</title>
    <style>
        table {
            border-collapse: collapse;
            width: 10%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Números Pares del 1 al 100</th>
        </tr>';

echo "<h2>Tabla que muestre los numeros pares entre 1 y 100:</h2>";
for ($i = 2; $i <= 100; $i += 2) {
    echo "<tr><td>$i</td></tr>";
}

echo '    </table>
</body>
</html>';
?>