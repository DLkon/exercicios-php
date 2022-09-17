<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
  <?php

    $resultado = 0;
    
    $numeroUm = $_POST["numeroUm"];
    $numeroDois = $_POST["numeroDois"];
    $soma = $numeroUm + $numeroDois;
  
    if ($soma > 10) {
      $resultado = $soma + 8; 
    } else {
      $resultado = $soma - 5; 
    }

    echo $resultado;

    
    
  ?>
</body>
</html>