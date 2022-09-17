<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resposta do algoritimo B</title>
</head>
<body>
<?php 

  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];

 if ($num1 > $num2 && $num1 > $num3) {
  $a = $num1; 
  if ($num2 > $num3) {
    $b = $num2;
    $c = $num3;
  } else {
    $b = $num3;
    $c = $num2;
  }
 } elseif ($num2 > $num1 && $num2 > $num3) {
  $a = $num2;
  if ($num1 > $num3 ) {
    $b = $num1;
    $c = $num3;
  } else {
    $b = $num3;
    $c = $num1;
  }
 } elseif ($num3 > $num1 && $num3 > $num2) {
  $a = $num3;
  if ($num1 > $num2){
    $b = $num1;
    $c = $num2;
  } else {
    $b = $num2;
    $c = $num1;
  }
 }

  echo $a;
  echo $b;
  echo $c;
    
?>
</body>
</html>