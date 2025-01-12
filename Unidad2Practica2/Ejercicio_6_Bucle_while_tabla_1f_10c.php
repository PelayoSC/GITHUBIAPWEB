<?php
/* Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. 
Utiliza un bucle while*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números del 1 al 10 usando while</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, td {
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
    <h2>Números del 1 al 10 en una tabla de una fila y 10 columnas. (Bucle while)</h2>
    <table>
            <tr>
                <?php
                    // Mostrar los números del 1 al 10 en una fila con 10 columnas usando un bucle while
                    $num = 1;
                    while ($num <= 10) {
                        echo "<td>$num</td>";
                        $num++;
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
