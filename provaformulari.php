<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET["usuario"]) and isset($_GET["password"])){
    if ($_GET ["password"]=="123456"){
    echo "<p>Bienvenido <strong>".$_GET["usuario"]."</strong></p>";
}   
else {
    
}
?>
<form action="provaformulari.php" method="get">
  
  <p>Usuario: <input type="text" name="usuario" minlength="6"></p>

<p>Contraseña: <input type="password" name="password" minlength="6"></p>
<p>Correo para enviarte spam: <input type="email" name="correo" size="40"> </p>
<p>Teléfono móvil <input type="tel" name="telefono" size="40"> </p>
<p>Colores <input type="color" name="colorElegido" size="40px"> </p>
<fieldset>
  <legend>tiruli</legend>
<p>Selecciona el archivo<input type="file" name="archivo" size="40px"></p>
<p>Pepito <input type="hidden" name="nombre" value="pepito" size="40px"></p>
<P>Elige tu numero <select name="menu"> 
  <option value="1">Uno</option>
  <option value="2">Dos</option>
  <option value="3" selected>Tres</option>
</select></p>

<textarea name="texto" rows="8" cols="40" placeholder="Escriba algo"></textarea>
  <p>
  <button type="button">
    <img src="friends.jpg" alt="friends" width="64" height="64" style="vertical-align: middle">
        Este botón no hace nada mierder
</button>
    <input type="reset" value="Borrar">
  </p>
</form> 
<?php
}
?>
</body>
</html>