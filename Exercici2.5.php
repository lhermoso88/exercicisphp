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

$nota1=mt_rand(1,10);
$nota2=mt_rand(1,10);
$nota3=mt_rand(1,10);
$notafinal=intval(($nota1+$nota2+$nota3)/3);

switch ($notafinal)
{
    case 0: 
    case 1:
    case 2:
    case 3:
    case 4:
        $notatext="insuficiente";
    break;
    case 5:
        $notatext="Suficiente";
    break;
    case 6:
        $notatext="Bien";
    break;
    case 7:
        $notatext="Notable";
    break;
    case 8:
        $notatext="Notable";
    break;
    case 9:
        $notatext="Sobresaliente";
    break;
    case 10:
        $notatext="Sobresaliente";
    break;
}
echo "<p> Has tret un $nota1, $nota2, $nota3. Per tant la teva mitja és $notafinal. </p>"


?>
</body>
</html> 