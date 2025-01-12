<!--5.-Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.-->
<?php


echo "<h3>Matriz 3*5</h3>";
for ($i=0; $i<3; $i++)
    for ($j=0; $j<5; $j++)

$matriz [$i][$j] = rand (1,100); 

for ($i=0; $i<3; $i++)
    for ($j=0; $j<5; $j++)
echo "El elemento $i,$j es " . $matriz [$i][$j]. "<br>";

echo "<br>";

// Impreso por fila
echo "<h3>Impreso por fila</h3>";
for ($i=0; $i<3; $i++)
    for ($j=0; $j<5; $j++)
echo "<br>Fila ". $i ." Columna " . $j . " : " . $matriz [$i][$j];

echo "<br>";

// Impreso por columna
echo "<h3>Impreso por columna</h3>";
for ($i=0; $i<5; $i++) //hay que rotal el for para la columna
    for ($j=0; $j<3; $j++)
echo "<br>Columna ". $i ." Fila " . $j . " : " . $matriz [$j][$i];//aqui tambien
?>
<!--Para hacerlo en formato tabla hay que unir php y HTML-->
<?php
echo "<h3>Matriz 3*5</h3>";
for ($i=0; $i<3; $i++)
    for ($j=0; $j<5; $j++)

$matriz [$i][$j] = rand (1,100); 

for ($i=0; $i<3; $i++)
    for ($j=0; $j<5; $j++)
echo "El elemento $i,$j es " . $matriz [$i][$j]. "<br>";

// IMPRIMIR MEDIANTE TABLAS
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matriz en Tabla HTML</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: skyblue;
        }
    </style>
</head>
<body>

<h3>Impreso por fila</h3>
<table>
    <tr>
        <th>Fila / Columna</th>
        <?php 
        // Nombre para las columnas
        for ($j = 0; $j < 5; $j++) {
            echo "<th>Columna $j</th>"; 
        }
        ?>
    </tr>

    <?php
    // Pasar por las filas
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>"; 
        echo "<th>Fila $i</th>"; 
        // Pasar por las columnas de esa fila
        for ($j = 0; $j < 5; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>"; 
        }
        echo "</tr>"; 
    }
    ?>
</table>

<br>
<h3>Impreso por columna</h3>
<!-- Tabla que muestra los datos por columna -->
<table>
    <tr>
        <th>Columna / Fila</th>
        <?php 
        // Titulos de las filas
        for ($i = 0; $i < 3; $i++) {
            echo "<th>Fila $i</th>"; 
        }
        ?>
    </tr>

    <?php
    // Pasar por las columnas
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>"; 
        echo "<th>Columna $i</th>"; 
        // Pasar por las filas de esa columna
        for ($j = 0; $j < 3; $j++) {
            echo "<td>" . $matriz[$j][$i] . "</td>"; 
        }
        echo "</tr>"; 
    }
    ?>
</table>

</body>
</html>