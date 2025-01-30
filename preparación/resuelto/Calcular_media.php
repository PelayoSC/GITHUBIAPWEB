<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Para Ingresar 10 Notas</title>
</head>
<body>
    <h2>Formulario Para Ingresar 10 Notas</h2>
    <form action="Media.php" method="POST">
        <?php
            for($i=1;$i<11;$i++){
            echo "<label>Nota $i: </label>";
            echo "<input type='number' id='numero' name='e$i' required>";
            echo "<br><br>";
            }
        ?>
        <button type="submit" >Calcular</button>
    </form>
</body>
</html>