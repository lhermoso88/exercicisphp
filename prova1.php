<?php
if (isset($_GET["usuario"]) and isset($_GET["password"])){
    if ($_GET ["password"]=="123456"){
    echo "<p>Bienvenido <strong>".$_GET["usuario"]."</strong></p>";
}   
else {
    
}
?>