<!DOCTYPE html>
<html lang="pt-br">
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/site.css">

<!--JS-->

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

        <title>EXERCÍCIO 1</title>
    </head>
<body>
<div id="borda">
  <form method="POST">
    <div id="contorno" class="form-group">
      <label>Nome</label>
      <input name="nomequequiserpow" id="nome" type="text"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">Insira seu nome aqui.</small>
    </div>
    <button type="submit" class="btn btn-primary">SALVAR</button>
  </form>
<?php
    // cookies.php

    if (isset($_POST['nomequequiserpow'])) {
        echo 'VOCÊ JÁ VEIO AQUI E SEU NOME É:';
        echo $nome;
        
    } else {
        echo 'Você NUNCA passou por aqui.';
        setcookie('cookie_NOME', 'SEU NOME...', time() + 3600);
        
    }
?>
    </body>
</html>