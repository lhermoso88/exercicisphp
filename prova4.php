<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <?php 

$num=mt_rand (0,10);

for ($i=0;$i<11;$i++){
    echo "<tr>";
    echo "<td> $num * $i";
    echo "</td>";
    $resul=$num*$i;
    echo "</td>";
    echo "</tr>";
    
}
    ?>
 </table>
</body>
</html>