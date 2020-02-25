<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="exercici2.2.1.php" method="get">
    Elija dos números:
    <input type="number" name="numero1">
    <input type="number" name="numero2">

<select name="operacions">
<option>Suma</option>
<option>Resta</option>
<option>Multiplicació</option>
<option>Divisió</option>
</select>
<p> <input type="submit" value="enviar"> </p>
</form>
<?php

    
if (isset($_GET["numero1"]) and isset($_GET["numero2"]) and isset($_GET["operacions"])){
    $num1=$_GET["numero1"];
    $num2=$_GET["numero2"];
    $oper=$_GET["operacions"];

    if ($oper=="Suma"){
        function Suma($sum1,$sum2){
    
            return $sum1+$sum2; 
        }
        echo Suma ($num1,$num2);
    }
    if ($oper=="Multiplicació"){
        function Multiplicacio($multi1,$multi2){
    
            return $multi1*$multi2; 
        }
        echo Multiplicacio ($num1,$num2);
    }
    if ($oper=="Resta"){
        function Resta($resta1,$resta2){
    
            return $resta1-$resta2; 
        }
        echo Resta ($num1,$num2);
    }
    if ($oper=="Divisió"){
        function Divisio ($div1,$div2){
    
            return $div1/$div2; 
        }
        echo Divisio ($num1,$num2);
    }
}


/*function menu ($x, $y){
    $valor=1;
    for ($i=0;$i<=$y;$i=$i++){
        $valor=$valor+$x;
    }
    return $valor;
}
$x=menu(1);
$y=menu(2);*/
?>
</body>
</html>