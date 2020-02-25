<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $hora=mt_rand(0,24);
    
    if($hora>=6 and $hora<12){
       
        $notatext="Buenos Días";
      } 
      elseif ($hora>=13 and $hora<20)
      {
          $notatext="Buenas Tardes";
      }
      else 
      {
          $notatext="Buenas Noches";
      }
    
  echo "<p> Si son las $hora, diremos $notatext</p>";


    ?>
</body>
</html>