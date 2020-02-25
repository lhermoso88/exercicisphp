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
    $i=mt_rand(0,10);
    
    for ($i<11;$i<=100;$i++)
    {
        
        echo "<tr>";
        echo "<td>";
        echo $i*1;
        echo "</td>";
        echo "<td>";
        echo $i*2;
        echo "</td>";
        echo "<td>";
        echo $i*3;
        echo "</td>";
        echo "<td>";
        echo $i*4;
        echo "</td>";
        echo "<td>";
        echo $i*5;
        echo "</td>";
        echo "<td>";
        echo $i*6;
        echo "</td>";
        echo "<td>";
        echo $i*7;
        echo "</td>";
        echo "<td>";
        echo $i*8;
        echo "</td>";
        echo "<td>";
        echo $i*9;
        echo "</td>";
        echo "<td>";
        echo $i*10;
        echo "</td>";
        echo "</tr>";
        
        

    }
    

    ?>
</table>
</body>
</html>