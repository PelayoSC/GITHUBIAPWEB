<?php
session_start();

if (isset($_POST['letras'])){

    echo '<h1>Bienvenido a la página principal</h1>';
    echo $_SESSION['$n'];
    
    echo '<br>';
    
    echo 'LETRA: ';
    echo '<form><label for="letras">Selecciona una letra:</label>
    <select name="letras" id="letras">
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
      <option value="ñ">Ñ</option>
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
    <br>
    <input type="submit" value="Enviar">
    </form>';

    echo 'Recarga';
    
}else{

    echo '<h1>Bienvenido a la página principal</h1>';
    echo $_SESSION['$n'];
    
    echo '<br>';
    
    echo 'LETRA: ';
    echo '<form><label for="letras">Selecciona una letra:</label>
    <select name="letras" id="letras">
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
      <option value="ñ">Ñ</option>
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
    <br>
    <input type="submit" value="Enviar">
    </form>';

}

?>