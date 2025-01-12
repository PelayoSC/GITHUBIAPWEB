<?php
/* Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. 
Utiliza un bucle do-while*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar del 1 al 10 y Números del 1 al 10</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        h2 {
            text-align: center;
        }
        </style>
</head>
<body>
    <h2>Números del 1 al 10 en una tabla de una fila y 10 columnas. (Bucle do-while) </h2>
    <table>
            <tr>
                <?php
                    // Mostrar los números del 1 al 10 en una fila con 10 columnas usando un bucle while
                    $num = 1;
                    do {
                        echo "<td>$num</td>";
                        $num++;
                    } while ($num <= 10);
                ?>
            </tr>
        </table>
    </body>
</html>
