<?php
echo "<h2>Bucles con WHILE:<br></h2>";
echo "Bucle en la misma linea del valor de i <br>";
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
echo "<br><br>Bucle con salto de linea del valor de i<br>";
$i = 1;
while ($i < 6) {
  echo $i.'<br>';
  $i++;
}

echo "<br>Bucle con salto de linea que muestre el doble de i<br>";
$i = 1;
while ($i < 6) {
  echo $i*2 .'<br>';
  $i++;
}

echo "<br>Los primeros 10 numeros pares son:<br>";
$i = 1;
while ($i < 11) {
  echo $i*2 .'<br>';
  $i++;
}

echo "<br>Los primeros 10 numeros pares son:<br>";
$i = 2; //Empezamos directamente en dos
while ($i <= 20) { //Tope a donde queremos llegar
  echo $i .'<br>';
  $i+=2; //Incrementa lo que hay en dos unidades
}

?>