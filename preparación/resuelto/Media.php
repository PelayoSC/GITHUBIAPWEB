<h1>RESULTADOS</h1>
<?php
$suma = 0;
$media = 0;
$menor = 11;
$mayor = 0;
echo "Notas Ingresadas: ";
foreach($_POST as $i){
    echo "$i, ";
}
echo "<br>";
foreach ($_POST as $x){
    $suma=$suma+$x;
}
$media=$suma/count($_POST);
echo "Promedio de las notas: ". $media;

echo "<br>";
foreach ($_POST as $s){
    if($s > $mayor){
        $mayor = $s;
    }
}
echo "La nota más alta es: $mayor";

echo "<br>";
foreach ($_POST as $l){
    if($l < $menor){
        $menor = $l;
    }
}
echo "La nota más baja es: $menor";
?>