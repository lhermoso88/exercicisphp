<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercici2.2.2.php" method="get">
Indique su precio más abajo y le indicaremos su descuento :
<input type="number" name="numero">
<p> <input type="submit" value="enviar"> </p>
</form>
    <?php

function descompte1($des1){
    return $des1*0.15;
}
function descompte2($des2){
    return $des2*0.10;
}
if (isset($_GET["numero"])){
    $num=$_GET["numero"];

    if ($num<100){
        echo "Lo sentimos no tienes ningún descuento";
    }
    elseif ($num>100 and $num<499.99){
        $final=$num-descompte2 ($num);
        echo "Al final usted pagará $final";
    }
    elseif ($num>500){
        
        $final=$num-descompte1($num);
        echo "su descuento será:";
        echo descompte1($num); 
       echo "Y al final usted pagará $final";
    }
}


    

/* Resuelto por Pau
<?php
 function descuento ($x){
    if ($x<100){
        return 0;
    }
    else if ($x>=100 and $x<500){
        return $x*0.10;
    }
    else {
        $x*0.15;
    }
}
if (!isset($_GET["precio])){

?>
<form action="ejercicio2.2.2.php" method="GET>
<p>
Precio: <input type="number" name="precio" min="1" max="10000" autofocus=""> euros </p>
<input type="submit" value="calcular";
</form>
<?php
} else {
    $precio=$_GET["precio"];
    $resultado=$precio-descuento($precio);
    echo"El resultado es <strong>$resultado</strong>";

}
?>*/
?>
</body>
</html>