<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $password=2004;
    if (isset ($_GET["contador"]+1)){
        $contador=$_GET["contador"];
        $num=$_GET["num"];
        if ($num==$password){
        echo "<p>Bienvenido</p>";}   
        elseif ($_GET["contador"]<5){
            $num=$bien;
        echo "<p>Vuelve a intentarlo<p>";}
    else {
        echo "<p>Has fallado capullo<p>";
        
    ?>
    <form action="exercici45.php" method="get">
    <input type="hidden" name="contador" value="<?php=$contador?>">

    </form> 
    <?php
    }
    ?>
    
</body>
</html>