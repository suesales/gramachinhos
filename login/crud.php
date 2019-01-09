<?php

  require_once('../connection.php');

  ## Admin
  function fnLogin($request) {
    $link = getConnection();

    $query = "select id, nome, login, registro from tb_admin where login = '{$request["txtLogin"]}' and senha = md5('{$request["txtPass"]}')";
    
    $rs = mysqli_query($link, $query);

    return mysqli_fetch_assoc($rs);
  }
