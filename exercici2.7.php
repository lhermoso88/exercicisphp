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

    $edad=mt_rand(20,60);
    $salari=mt_rand(600,3000);

    if($salari>2000){
       $salarifinal="no cambia";
      } 
      elseif ($salari>=1000 or $salari<=2000)
      {
          {if ($edad>45)
          $salarifinal=$salari*1.03;}
          {if ($edad<=45)
          $salarifinal=$salari*1.10;}
      }
      elseif ($salari<1000)
      {
          {if ($edad<30)
          $salarifinal="1100 euros";}
          {if ($edad<=30 and $edad<=45)
            $salarifinal=$salari*1.03;}
          {if ($edad>45) 
        $salarifinal=$salari*1.15;}
      }
    
  echo "<p> Si tens $edad, i cobres $salari cobraràs $salarifinal</p>";

    ?>
</body>
</html>