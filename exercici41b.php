
<?php
$num=$_GET["tabla"];
?>
<table>
<?php
for ($i=0;$i<11;$i++){
    $resul=$num*$i;
    echo "<tr>";
    echo "<td>$num * $i és igual a";
    echo "</td>";
    echo "<td>";
    echo "$resul";
    echo "</td>";
    echo "</tr>";
    
}
    ?>
 </table>