<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
    div{
            position:fixed;
            width:50px;
            height:50px;
        }
        </style>
    <title>exercici 48b</title>
</head>
<body>
<?php

for($i=1;$i<=2000;$i=$i+1){
  
 $red=mt_rand(0,255);
 $blue=mt_rand(0,255);
 $green=mt_rand(0,255);
 $y=mt_rand(0,100);
 $x=mt_rand(0,100);
 
 echo "<div style='left:$x%; top:$y%; background-color:rgb($red,$blue,$green)'></div>";
     
}


?>
</body>
</html>