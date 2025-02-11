<?php
session_start();


if (isset($_POST['letras'])) {
    $letra = $_POST['letras'];
    include 'conexion.php';

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $stmt = $mysqli->prepare("SELECT * FROM articulos WHERE nombreArticulo LIKE ?");
    $like_letra = $letra . '%';
    $stmt->bind_param("s", $like_letra);
    $stmt->execute();
    $result = $stmt->get_result();

    echo '<h1>Bienvenido a la página de Listado</h1>';
    
    echo '<br>';
    
    echo 'LETRA: ';
    echo '<form method="POST" action="">
    <label for="letras">Selecciona una letra:</label>
    <select name="letras" id="letras" onchange="this.form.submit()">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
      <option value="d">D</option>
      <option value="e">E</option>
      <option value="f">F</option>
      <option value="g">G</option>
      <option value="h">H</option>
      <option value="i">I</option>
      <option value="j">J</option>
      <option value="k">K</option>
      <option value="l">L</option>
      <option value="m">M</option>
      <option value="n">N</option>
      <option value="o">O</option>
      <option value="p">P</option>
      <option value="q">Q</option>
      <option value="r">R</option>
      <option value="s">S</option>
      <option value="t">T</option>
      <option value="u">U</option>
      <option value="v">V</option>
      <option value="w">W</option>
      <option value="x">X</option>
      <option value="y">Y</option>
      <option value="z">Z</option>
    </select>
    </form>';

    echo "<table border='1'>
    <tr>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Contraseña</th>
    <th>Email</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nombreArticulo'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['unidades'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $stmt->close();
    $mysqli->close();
    echo '<a href="../menu.php">Menú</a><br>';


} else {
    echo '<h1>Bienvenido a la página de Listado</h1>';
    
    echo '<br>';
    
    echo 'LETRA: ';
    echo '<form method="POST" action="">
    <label for="letras">Selecciona una letra:</label>
    <select name="letras" id="letras" onchange="this.form.submit()">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
      <option value="d">D</option>
      <option value="e">E</option>
      <option value="f">F</option>
      <option value="g">G</option>
      <option value="h">H</option>
      <option value="i">I</option>
      <option value="j">J</option>
      <option value="k">K</option>
      <option value="l">L</option>
      <option value="m">M</option>
      <option value="n">N</option>
      <option value="o">O</option>
      <option value="p">P</option>
      <option value="q">Q</option>
      <option value="r">R</option>
      <option value="s">S</option>
      <option value="t">T</option>
      <option value="u">U</option>
      <option value="v">V</option>
      <option value="w">W</option>
      <option value="x">X</option>
      <option value="y">Y</option>
      <option value="z">Z</option>
    </select>
    </form>';

    echo '<a href="../menu.php">Menú</a><br>';

}

?>