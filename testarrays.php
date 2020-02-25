<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     aquesta és la primera manera de fer-ho.
    $item[0]=50;
    $item[1]=35;
    $item[2]=47;
    $item[4]=73;
    $item[6]=56;
    $item[9]=62;
    $item[10]=80;
    $item[12]=12;
    
  /*  Aquesta és la segona manera
$item=array(50,35,47,73);
    for($i=0;$i<=3;$i++){
        echo $item[$i]. "<br>";
    }
    
    Aquesta és la tercera manera, posant el "count($item)

    $item=array(50,35,47,73);
    for($i=0;$i<count($item);$i++){
        echo $item[$i]. "<br>";
    }
    
    Aquesta és una forma per si ens hem deixat algún $item per posar, l'hem de declrar amb un isset
    i així només ens contarà totes les variables $item que tinguem*/

    for($i=0;$i<=12;$i++){
        if (isset ($item[$i]))
        echo $item[$i]. "<br>";
        
    }
    ?>
</body>
</html>