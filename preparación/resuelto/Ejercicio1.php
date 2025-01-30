<?php
$cuadrado = 0;
$cubo = 0;
?>
<table border='1'>
        <?php
        for($x=0; $x <= 10; $x++){
        ?>
    <tr>
        <td>
         <?php
            echo $x ;
          ?>
        </td>
        <td>
          <?php
            $cuadrado = $x * $x;
            echo $cuadrado;
          ?>
        </td>
            <td>
                <?php
                $cubo = $x * $x * $x;
                echo $cubo;
                ?>
            </td>
        <?php
        }
        ?>
    </tr>
</table>