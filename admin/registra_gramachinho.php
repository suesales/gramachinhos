<?php
  require('./funcoes.php');
  require('./upload.php');

  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(setKid($_POST, uploadImg($_FILES['flFoto']))) {
      $_SESSION['status']['tipo'] = "success";
      $_SESSION['status']['msg'] = "Gramachinho Regsitrado com sucesso";
    } else {
      $_SESSION['status']['tipo'] = "error";
      $_SESSION['status']['msg'] = "Falha ao registrar o Gramachinho";
    }
    header("Location: register_gramachinho.php");
    exit;
  }
