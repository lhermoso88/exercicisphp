<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<?php
$dia=mt_rand(1,7);
switch ($dia){
    case 1:
        $diasemana="Lunes";
        $asignatura="Publcació";
    break;

    case 2:
        $diasemana="Martes";
        $asignatura="Creació";
    break;
    case 3:
        $diasemana="Miercoles";
        $asignatura="PRL";
    break;
    case 4:
        $diasemana="Jueves";
        $asignatura="Llenguatge";
    break;
    case 5:
        $diasemana="Viernes";
        $asignatura="Publcació";
    break;
    case 6:
        $diasemana="Sabado";
        $asignatura="No hay clase";
    break;
    case 7:
        $diasemana="Domingo";
        $asignatura= "No hay clase";
    break;
    
        
    
}


echo "<p> Si hoy es $diasemana nos toca $asignatura</p>";


 ?>

    
</body>
</html>