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
   $resultat1=$i*1;
   $resultat2=$i*2;
   $resultat3=$i*3;
   $resultat4=$i*4;
   $resultat5=$i*5;
   $resultat6=$i*6;
   $resultat7=$i*7;
   $resultat8=$i*8;
   $resultat9=$i*9;
   $resultat10=$i*10;
   while ($i<10)
   {
    
       echo "<tr>";
       echo "<td>$resultat1</td>";
       echo "<td>$resultat2 </td>";
       echo "<td>$resultat3 </td>";
       echo "<td>$resultat4 </td>";
       echo "<td>$resultat5 </td>";
       echo "<td>$resultat6 </td>";
       echo "<td>$resultat7 </td>";
       echo "<td>$resultat8 </td>";
       echo "<td>$resultat9 </td>";
       echo "<td>$resultat10 </td>";
       echo "</tr>";
      

     

?>
</table>
    
</body>
</html>