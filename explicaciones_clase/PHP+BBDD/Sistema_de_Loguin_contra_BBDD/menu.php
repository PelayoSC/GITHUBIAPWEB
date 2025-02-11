<?php
session_start();

echo '<h1>Bienvenido a la página de Menú, ' . $_SESSION['$n'] . '</h1>';


echo '<a href="paginas_menu_usuario/insertar/FormularioINSERTAR.html">Insertar Artículo</a><br>';
echo '<a href="paginas_menu_usuario/borrar/FormularioBORRAR.html">Borrar Artículo</a><br>';
echo '<a href="paginas_menu_usuario/modificar/FormularioMODIFICAR.html">Modificar Artículo</a><br>';
echo '<a href="paginas_menu_usuario/listar.php">Ver Artículos</a><br>';
echo '<a href="Formulario.html">cerrar</a><br>';


?>
