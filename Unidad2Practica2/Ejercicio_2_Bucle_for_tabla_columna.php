<?php
/* Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una columna y 10 
filas. Utiliza un bucle for.*/

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
    <table>';
echo "<h2>Tabla que muestre los numeros del 1 al 10 en 1 columna y 10 filas:</h2><br>";      
for ($i = 1; $i <= 10; $i++) {
    echo "<tr> 
            <td>$i</td>
          </tr>";
}

    echo '    
    </table>
</body>
</html>';
?>