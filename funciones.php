<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*las funciones son parecidas a las clases y a los div de html. Es para ahorrar tiempo. La forma correcta 
    es la primera function que hemos hecho. siempre tiene que haber una variable para la función como $valor 
    y poner el "return" con su variable u opración.*/
    function doble($valor){
        return 2*$valor;
    }
    function negrita($texto){
        return "<strong>$texto</strong>";
    }
    function f1($x){
        return $h=9;
    }
    function potencia($x, $exponente){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$valor*$x;
        }
        return $valor;
    }
    echo potencia(2,6);
/*$x=4;
$z=doble($x);
$y=doble(9);
echo "$z y $y <br>";
echo negrita ("hola como estais");*/

    ?>

</body>
</html>