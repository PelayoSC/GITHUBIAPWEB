<?php
/*
Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota 
numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta los 
siguientes rangos:
    Insuficiente: [0, 5)
    Suficiente: [5, 6)
    Bien: [6, 7)
    Notable: [7, 9)
    Sobresaliente: [9, 10]
*/
// Genera un número aleatorio entre 0 y 10
$nota = rand (0, 10);
echo "La nota adjudicada es '$nota'. Esta calificación es: ";
if ($nota >=0 && $nota < 5){
    echo "Insuficiente";
    }
    elseif ($nota >=5 && $nota < 6){
        echo "Suficiente";
        }
        elseif ($nota >=6 && $nota < 7){
            echo "Bien";
            }
            elseif ($nota >=7 && $nota < 9){
                echo "Notable";
                }
                elseif ($nota >=9 && $nota <= 10){
                    echo "Sobresaliente";
                    }
                    else {
                        echo "Nota no valida";
                    }
?>