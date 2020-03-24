

<?php
session_start();


if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass'])) {

  $dados = $_POST;
  $_SESSION['banco'] = $dados;

  echo "<h3>BEM VINDO</h3>";
  

  $email = $_SESSION['banco']['email'];
  $pass = $_SESSION['banco']['pass'];

  echo "<h4>Seu e-mail é: <strong>{$email}</strong> </h4>";
  echo "<h4>Sua senha é: <strong>{$pass}</strong> </h4>";

  


  
} else {
  echo "<h2>Dados não enviados...</h2>";
  echo "<a href='index.php' class='btn btn-warning'>Voltar</a>";
}
