<?php
  require('./funcoes.php');

  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(efetuaLogin($_POST)) {
      $_SESSION['status']['tipo'] = "success";
      $_SESSION['status']['msg'] = "Senha Bem vindo";
      header("Location: ../admin/index.php");
      exit;
    } else {
      $_SESSION['status']['tipo'] = "error";
      $_SESSION['status']['msg'] = "<center><b>Erro ao efetuar login</b>.<br>Por favor verifique seu usuário e senha</center>";
      header("Location: ./index.php");
      exit;
    }
  }
