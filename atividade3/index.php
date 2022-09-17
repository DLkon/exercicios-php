<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>letra A</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div clas="A">
  <p>A - Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor da soma seja maior que 10, este deverá ser apresentando somando-se a ele mais 8; Se o valor da soma seja menor ou igual a 10, este deverá ser apresentado subtraindo-se 5;</p>

  <form action="algoritimoA.php" method="post">
  Numero um: <input type="number" name="numeroUm"><br>
  Numero dois: <input type="mumber" name="numeroDois"><br>
  <input type="submit" value="Enviar">
  </form>

</div>

<div class="B">
  <p>B - Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes:  exemplo: 1 - 9 - 4);</p>
  <form action="algoritimoB.php" method="post">
    Numero um: <input type="number" name="num1"><br>
    Numero dois: <input type="mumber" name="num2"><br>
    Numero tres: <input type="number" name="num3"><br>
    <input type="submit" value="Enviar">
  </form>
</div>
  <div class="C"> <p>C- Entrar com nome, genero e idade de uma pessoa. Se a pessoa tiver mais que 25 anos, imprimir nome, o genero, e a a mensagem: "Você pode se cadastrar". Caso contrário, imprimir nome, o genero, e a mensagem: "Você não pode se cadastrar"</p>

  <form action="algoritimoC.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Genero: <input type="text" name="genero"><br>

</form>
</div>

<div class="D"> <p> D- Ler um número inteiro entre 1 e 12 e imprimir o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês correpsondente a este número;</p>
Numero do mes: 
<form action="algoritimoD.php" method="post">
    <input type="number" name="mes"><br>
    <input type="submit" value="Enviar">
</form>
</div>

</body>
</html>