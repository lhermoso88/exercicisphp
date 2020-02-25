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
$password="2004";
$verform=true;

if (isset ($_GET["contador"])){
    $contador=$_GET["contador"];
    $num=$_GET["num"];

    if ($num==$password){
    echo "<p>Bienvenido</p>";
    $contador=0;
    $verform=false;}   

    elseif ($contador<4){
        $intentos=4-$contador;
    echo "<p>Vuelve a intentarlo, te quedan $intentos intentos.<p>";
    $contador=$contador+1;
}
    else {
    echo "<p>Has fallado capullo<p>";
    $verform=false;}
    }
else {
    $contador=0;
}
if ($verform==true){
?>
<form action="exercici45.php" method="get">
<p>Escribe los 4 primeros dígitos de la contraseña:</p>
<p><input type="number" name="num" autofocus minlength="4" maxlength="4"></p>
<p><input type="hidden" name="contador" value="<?=$contador?>"></p>
<p> <input type="submit" value="enviar"> </p>
</form> 
<?php
}
?>
</form>
</body>
</html>