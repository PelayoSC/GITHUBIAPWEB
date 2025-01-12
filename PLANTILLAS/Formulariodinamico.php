<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario dinamico</title>
</head>
<body>
    <h1>TITULO</h1>
    <form action=" eject_dinamico.php" method="POST" ">
        <?php
        for ($i=1; $i<=10; $i++) { //Genera 10 campos a rellenar
            echo "<label> Casilla número $i </label>";
            echo "<input type='number' name='n$i' id='numero$1' required>";
            echo "<br><br>";        
         }
        ?>
        <br>
        <input type="submit" value="Calcular Suma">
    </form>
</body>
</html>
