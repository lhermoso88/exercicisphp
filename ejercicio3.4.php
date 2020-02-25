<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, td, tr {
        border: 2px solid black;
        font-size: 20px;
    }
    </style>
</head>
<body>

<table>
<?php

$i=1;
while ($i<1000){
    echo "<tr>";
    echo "<td>";
    echo $i;
    echo "</td>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    echo "<td>";
    echo $i+2;
    echo "</td>";
    echo "<td>";
    echo $i+3;
    echo "</td>";
    echo "<td>";
    echo $i+4;
    echo "</td>";
    echo "</tr>";
  $i=$i+5;
}



$i=1;
while ($i<=1000) {
    $a=0;
    echo "<tr>";
    while ($a<5) {
        echo "<td>";
        echo $i;
        echo "</td>";
        $i=$i+1;
        $a=$a+1;
    }
    echo "</tr>";
}
?>

<table>
<tr>
<?php
$i=1
while($i<=1000){
        echo "<td>";
        echo $i;
        echo "</td>";
        if ($i%5!=0){
            echo "<td>";
            echo "</td>";
    }
    
}

?>
</table>
 </table>   
</body>
</html>