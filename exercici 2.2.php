<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>body{background-color: rgb(rojo,verde,azul);}</style>
</head>
<body>
    <?php

    $Red=mt_rand (0,255);
    $Green=mt_rand (0,255);
    $Blue=mt_rand (0,255);

    if($Red==0) {
        echo="<p>$Red</p>";
    }
    elseif ($Blue==0) {
        echo="<p>$Blue</p>";
    }
    elseif ($Green==0) {
        echo="<p>$Green<p>";
    }

    ?>

    
</body>
</html>