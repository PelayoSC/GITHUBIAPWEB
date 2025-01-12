<?php
/*Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un 
bucle for*/
    $numero = rand(1, 10);
?>
<!-- En este caso el php y html estan separados-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar Aleatoria</title> 
        <!-- La etiqueta title muestra título de la página web.
        Es lo que se muestra en la pestaña del navegador y en los marcadores cuando guardas la página.-->
    <style>
        table {
            border-collapse: separate; /* valor por defecto. borde mas grueso o duplicado */
            width: 50%; /* ancho que ocupa la tabla con respecto al contenedor/pagina*/
            margin: 20px auto; /* 20px arriba/abajo, auto izq/dcha */
        }
        /*
        Estructura etiquetas tabla:
        table: contenedor principal
        tr - table row. Fila - linea horizontal
            th - Table Header: celda de encabezado. 
            td - Table Data: celda de datos. contenido normal
        */
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th { /* Fondo de la celda encabezado */
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php //abro codigo php
        echo "<h2>Tabla de Multiplicar del número $numero</h2>";
    //cierro codigo php, continuo con html
?>  
    <table>
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php //abro codigo php dentro de html para usar bucle for
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }
        //cierro codigo php, continuo con html
        ?>
    </table>
</body>
</html>