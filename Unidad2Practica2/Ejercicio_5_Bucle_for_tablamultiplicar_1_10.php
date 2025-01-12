<?php
/*Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas de Multiplicar del 1 al 10</title>
    <style>
        table {
            border-collapse: collapse; /*bordes colapsados, no separados.*/
            width: 50%; /* ancho que ocupa la tabla con respecto al contenedor/pagina*/
            margin: 20px auto; /* 20px arriba/abajo, auto izq/dcha */
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2, h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Tablas de Multiplicar del 1 al 10</h2>
        <?php 
            for ($numero = 1; $numero <= 10; $numero++) {
                echo "<h3>Tabla de multiplicar del $numero</h3>";
                echo "<table>";
                echo "<tr>
                        <th>Operación</th>
                        <th>Resultado</th>
                      </tr>";
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "<tr>
                            <td>$numero x $i</td>
                            <td>$resultado</td>
                          </tr>";
                }
                echo "</table>";
            }
        ?>
</body>
</html>