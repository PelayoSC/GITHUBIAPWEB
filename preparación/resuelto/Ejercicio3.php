<?php
$media = 0;
$Estudiantes=array(
    'Juan'=>array(85,90,78),
    'María'=>array(92,88,95),
    'Luis'=>array(70,75,80),
    'Ana'=>array(80,76,92),
    'Carlos'=>array(60,65,70),
);
echo "<ol>";
foreach($Estudiantes as $E=>$n){
    echo "<li>$E</li><ol>";
    echo "<li>calificaciones: ";
    foreach($n as $u=>$h){
        echo " $h, ";
    }
    echo "</li>";
    echo "<li>Promedio:";
    for($i=0;$i<3;$i++){
        $media=array_sum($n) / count($n);
    }
    echo $media;
    echo "</li></ol>";
}
echo "</ol>";
?>