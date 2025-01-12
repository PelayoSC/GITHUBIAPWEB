<?php

//Listas ordenadas
echo " Listas ordenadas
<ol>
    <li>Elemento 1</li>
    <li>Elemento 2</li>
</ol>
";

//Listas desordenadas
echo " Listas desordenadas
<ul>
    <li>Elemento 1</li>
    <li>Elemento 2</li>
</ul>
";
// Lista desordenada dentro de una lista ordenada
echo " Lista desordenada dentro de una lista ordenada
<ul>
    <li>Elemento A</li>
    <li>Elemento B</li>
    <li>Elemento C
        <ol>
            <li>Subelemento C.1</li>
            <li>Subelemento C.2</li>
        </ol>
    </li>
    <li>Elemento D</li>
</ul>

";

// Lista ordenada dentro de una lista desordenada
echo " Lista ordenada dentro de una lista desordenada
<ol>
    <li>Elemento 1</li>
    <li>Elemento 2</li>
    <li>Elemento 3
        <ul>
            <li>Subelemento 3.1</li>
            <li>Subelemento 3.2</li>
        </ul>
    </li>
    <li>Elemento 4</li>
</ol>

";
?>