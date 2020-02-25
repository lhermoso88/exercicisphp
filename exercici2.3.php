<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<?php
$var=mt_rand(1,7);
$Festivos=0;
$Clase=0;

if($var==1){
    echo "<p>Es Lunes y toca Creació de pàgines web</p>";
    $Lunes=$Clase+1;
    //$aprobados++; // esto es lo mismo que arriba
 } 
 elseif ($var==2){
    echo"<p> Es Martes y y toca Programació de pàgines web</p>";
    $Clase=$Clase+1;
}
 elseif ($var==3){
     echo"<p> Es Miércoles y toca PRL </p>";
     $Clase=$Clase+1;
 }
 elseif ($var==4){
    echo"<p> Es Jueves y toca Programació de pàgines web</p>";
    $Clase=$Clase+1;
}
elseif ($var==5){
    echo"<p> Es Viernes y toca Publicació de pàgines web</p>";
    $Clase=$Clase+1;
}
elseif ($var==6){
    echo"<p> Es Sábado y es Festivo</p>";
    $Festivos=$Festivos+1;
}
elseif ($var==7){
    echo"<p> Es Domingo y es festivo</p>";
    $Festivos=$Festivos+1;
}

     

echo "<p> Los dias que hemos de ir a clase son $Clase </p>";
echo "<p> Los dias que tenemos fiesta son $Festivos </p>";

 ?>

    
</body>
</html>