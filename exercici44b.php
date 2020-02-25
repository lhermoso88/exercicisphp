<?php
$num=$_GET["base"];
?>
<?php
$IRPF=$num*-0.15;
$IVA=$num*0.21;

    if ($num=$_GET["base"]){
    $resul=$num+$IVA+$IRPF;
    echo "<p>Tu salario actual quedará por $resul mensuales<p>"; 
}
?>
 