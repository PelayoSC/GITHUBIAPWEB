<?php
$media = 0;
$Estudiantes=array(
    'Persona1'=>array('María','Fernández',25),
    'Persona2'=>array('Ana','Iglesias',18),
    'Persona3'=>array('Pablo','Pérez',30),
);
echo "<ol>";
foreach($Estudiantes as $E=>$n){
    echo "<li>";
    foreach($n as $u=>$h){
        echo " $h";
    }
    echo "</li>";
}
echo "</ol>";
?>