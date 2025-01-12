<?php
/* Crea un array llamado deportes e introduce los siguientes valores: futbol, 
baloncesto, natación, tenis. Haz el recorrido de la matriz con un for para mostrar 
sus valores. A continuación realiza las siguientes operaciones
1 Muestra el total de valores que contiene. 
2 Sitúa el puntero en el primer elemento del array y muestra el valor actual, es  
decir, donde está situado el puntero actualmente.
3 Avanza una posición y muestra el valor actual. 
4 Coloca el puntero en la última posición y muestra su valor. 
5 Retrocede una posición y muestra este valor.*/ 

// Crear el array llamado deportes
$deportes = ["futbol", "baloncesto", "natación", "tenis"];

// Recorrer el array con un bucle for para mostrar sus valores
echo "<h3>Recorrido de la matriz:</h3>";
for ($i = 0; $i < count($deportes); $i++) {
    echo "Deporte $i: " . $deportes[$i] . "<br>";
}

// 1. Mostrar el total de valores que contiene
echo "<h3>Total de valores:</h3>";
echo count($deportes) . "<br>";

// 2. Sitúa el puntero en el primer elemento y muestra el valor actual
reset($deportes); // Colocar el puntero en el primer elemento
echo "<h3>Valor actual (primer elemento):</h3>";
echo current($deportes) . "<br>";

// 3. Avanza una posición y muestra el valor actual
next($deportes); // Avanzar una posición
echo "<h3>Valor actual (segunda posición):</h3>";
echo current($deportes) . "<br>";

// 4. Coloca el puntero en la última posición y muestra su valor
end($deportes); // Colocar el puntero en la última posición
echo "<h3>Valor actual (última posición):</h3>";
echo current($deportes) . "<br>";

// 5. Retrocede una posición y muestra este valor
prev($deportes); // Retroceder una posición
echo "<h3>Valor actual (penúltima posición):</h3>";
echo current($deportes) . "<br>";
?>
