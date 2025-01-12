<?php
/*Carga el siguiente arrays de arrays e imprime los valores en formato lista no numerada:
Equipos
    Equipo 1:
        jugador 1 = pepe
        jugador 2 = juan
        jugador 3 = manolo
    Equipo 2:
        jugador 1 = ana
        jugador 2 = maria
        jugador 3 =paula
*/

// Definimos el array de arrays para los equipos y jugadores
$equipos = array(
    "Equipo 1" => array(
        "Jugador 1" => "Pepe",
        "Jugador 2" => "Juan",
        "Jugador 3" => "Manolo"
    ),
    "Equipo 2" => array("Jugador 1" => "Ana", "Jugador 2" => "Maria", "Jugador 3" => "Paula")
    );

// Mostramos los valores en formato de lista no numerada
echo "<h2>Lista no numerada</h2>";
echo "<ul>"; // Comienza la lista principal

foreach ($equipos as $equipo => $jugadores) {
    echo "<li><h3>$equipo</h3></li>"; // Título del equipo
    echo "<ul>"; // Lista anidada para los jugadores

    foreach ($jugadores as $jugador => $nombre) {
        echo "<li>$jugador: $nombre</li>"; // Muestra cada jugador y su nombre
    }

    echo "</ul>"; // Cierra la lista anidada
}
echo "</ul>"; // Cierra la lista principal

//LISTA ORDENADA
// Mostramos los valores en formato de lista no numerada
echo "<h2>Lista numerada</h2>";
echo "<ol>"; // Comienza la lista principal

foreach ($equipos as $equipo => $jugadores) {
    echo "<li><h3>$equipo</h3></li>"; // Título del equipo
    echo "<ol>"; // Lista anidada para los jugadores

    foreach ($jugadores as $jugador => $nombre) {
        echo "<li>$jugador: $nombre</li>"; // Muestra cada jugador y su nombre
    }

    echo "</ol>"; // Cierra la lista anidada
}
echo "</ol>"; // Cierra la lista principal
?>
