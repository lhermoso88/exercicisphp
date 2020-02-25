<?php 

$P1=$_GET["P1"];
$P2=$_GET["P2"];
$P3=$_GET["P3"];
$P4=$_GET["P4"];
$P5=$_GET["P5"];
$P6=$_GET["P6"];
$P7=$_GET["P7"];
$P8=$_GET["P8"];
$P9=$_GET["P9"];
$P10=$_GET["P10"];
$total=$P1+$P2+$P3+$P4+$P5+$P6+$P7+$P8+$P9+$P10;



echo "<h1>El resultado de tu test de infidelidad es: $total</h1>
     <p> Puntuación entre 0 y 10:<br>
    ¡Enhorabuena! tu pareja parece ser totalmente fiel. <br>

    Puntuación entre 11 y 22:<br>
    Quizás exista el peligro de otra persona en su vida o en su mente, <br>
    aunque seguramente será algo sin importancia. No bajes la guardia.<br>

    Puntuación entre 22 y 30:<br>
    Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. <br>
    Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.</p>"
?>