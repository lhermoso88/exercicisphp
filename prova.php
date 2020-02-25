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
if (isset($_GET["nombre"])){
echo "<p>Tu nombre es ".$_GET["nombre"]."</p>";
}
if (isset($_GET["nacido"])){
echo "<p>Naciste en el ".$_GET["nacido"]."</p>";
}
if (isset($_GET["hm"])){
echo "<p>Eres ".$_GET["hm"]."</p>";
}
?>
<form action="prova.php" method="get">
  <p>Nombre: <input type="text" name="nombre" size="40"></p>
  <p>Año de nacimiento: <input type="number" name="nacido" min="1900"></p>
  <p>Sexo:
    <input type="radio" name="hm" value="hombre"> Hombre
    <input type="radio" name="hm" value="mujer"> Mujer
  </p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
</form> 
</body>
</html>