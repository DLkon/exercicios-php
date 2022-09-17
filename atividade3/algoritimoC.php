<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Algoritimo C</title>
</head>
<body>
  <?php 
    
  $nome = $_POST["nome"];
  $idade = $_POST["idade"];
  $genero = $_POST["genero"];

  if ($idade > 25) {
    echo "Ola $nome do sexo $genero,";
    echo "Você pode se cadastrar";
  } else {
    echo "Ola $nome do sexo $genero ";
    echo "Você não pode se cadastrar";
  }
  ?>
</body>
</html>