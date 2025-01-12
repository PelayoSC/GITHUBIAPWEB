<?php
    $suma = 0;
    for ($i=1;$i<=10;$i++) {
         $suma = $suma + $_POST["e$i"];
        }
    echo "<h2>La suma total de los números es: $suma</h2>";
?>