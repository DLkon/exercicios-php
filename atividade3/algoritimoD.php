<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Algoritimo 5</title>
</head>
<body>
  <?php 
    $mes = $_POST["mes"];
    if ($mes == 1) {
      echo "voce escolheu Janeiro";
    }
    if ($mes == 2) {
      echo "voce escolheu Fevereiro";
    }
    if ($mes == 3) {
      echo "voce escolheu Março";
    }
    if ($mes == 4) {
      echo "voce escolheu Abril";
    }
    if ($mes == 5) {
      echo "voce escolheu Maio";
    }
    if ($mes == 6) {
      echo "voce escolheu Junho";
    }
    if ($mes == 7) {
      echo "voce escolheu Julho";
    }
    if ($mes == 8) {
      echo "voce escolheu Agosto";
    }
    if ($mes == 9) {
      echo "voce escolheu Setembro";
    }
    if ($mes == 10) {
      echo "voce escolheu Outubro";
    }
    if ($mes == 11) {
      echo "voce escolheu Novembro";
    } 
    if ($mes == 12) {
      echo "voce escolheu Dezembro";
    } if ($mes > 12) {
      echo "Não existe mês correspondente a este numero";
    }


  ?>
</body>
</html>