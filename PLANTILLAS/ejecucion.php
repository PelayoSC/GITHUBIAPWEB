<?php
// Recoger datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['valor1'];
    $contraseña = $_POST['valor2'];
    $telefono = $_POST['valor3'];

    // Mostrar los datos
    echo "El nombre es: $usuario<br>";
    echo "La contraseña es: $contraseña<br>";
    echo "El teléfono es: $telefono<br>";

 // Mostrar los datos en una sola línea
 echo "El nombre es: $usuario, la contraseña es: $contraseña y el teléfono es: $telefono";
} 
else {
    echo "Por favor, accede al formulario correctamente.";
}
?>
