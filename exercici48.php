<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 48</title>
</head>
<body>
<?php


if (isset($_GET["Imagenes"]) and($_GET["filas"])){
 $altura=$_GET["filas"];
 $material=$_GET["Imagenes"];

    for($i=1;$i<=$altura;$i=$i+1){
        for($i2=0;$i2<=$i;$i2=$i2+1){
            echo "<img src=img/$material.jpg>";
        }
      echo "<br>";
    }
 }else{

?>
<h1>La pirámide de la Muerte</h1>
<h2>Sigue los siguientes pasos:</h2>
<p>1º Elige un elemento:</p>
<form action="exercici48.php" method="get">
<select name="Imagenes">
  <option selected>...</option>
    <option>Ojo</option>
    <option>Mariposa</option>
    <option>Gallo</option>
    <option>Moon</option>
    <option>Sun</option>

 </select> 
  <p>2º Ahora elige un número de filas:</p>
  
  <select name="filas">
    <option selected>...</option>
    <option value="6">1</option>
    <option value="7">2</option>
    <option value="8">3</option>
    <option value="9">4</option>
    <option value="10">5</option>
    </select>
  
  <p>¡Y por último dale a enviar cacho perro!<p>

  <p> <input type="submit" value="enviar"> </p>
</select>
</form>
<?php
}
?>
</body>
</html>