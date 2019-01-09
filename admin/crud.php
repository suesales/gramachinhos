<?php

  require_once('../connection.php');

  function fnCreateKid($request, $foto) {
    $link = getConnection();
    $query = "insert into tb_criancas values(null,
        '{$request["txtNome"]}',
        '{$request["txtNomePai"]}',
        '{$request["txtNomeMae"]}',
        '{$request["txtDtNasc"]}',
        {$request["txtPeso"]},
        {$request["txtAltura"]},
        {$request["txtCalcado"]},
        '{$request["txtNomeEscola"]}',
        '{$request["txtSerie"]}',
         " . ((!isset($request["txtAutoSaidaExterna"]) || $request["txtCerNasc"] === "off") ? "FALSE" : "TRUE") . ",
         " . ((!isset($request["txtAutoImage"]) || $request["txtCerNasc"] === "off") ? "FALSE" : "TRUE") . ",
        '{$request["txtLograouro"]}',
        '{$request["txtCep"]}',
        '{$request["txtBairro"]}',
        '{$request["txtCidade"]}',
        " . ((!isset($request["txtCerNasc"]) || $request["txtCerNasc"] === "off") ? "FALSE" : "TRUE") . ",
        " . ((!isset($request["txtRG"]) || $request["txtCerNasc"] === "off") ? "FALSE" : "TRUE") . ",
        " . ((!isset($request["txtCpf"]) || $request["txtCerNasc"] === "off") ? "FALSE" : "TRUE") . ",
        '{$foto}',
        now()
      )";

    if(!mysqli_query($link, $query)) {
      throw new \Exception("Error ao gravar", 1);
    }

    return true;
  }

  function fnListKids() {
    $link = getConnection();

    $query = "select * from tb_criancas";

    $rs = mysqli_query($link, $query);

    $kids = array();
    while($row = mysqli_fetch_assoc($rs)) {
      array_push($kids, $row);
    }

    return $kids;
  }

  function fnFindKidById($id){
    $link = getConnection();

    $query = "select * from tb_criancas where id = {$id}";

    $rs = mysqli_query($link, $query);

    return mysqli_fetch_assoc($rs);
  }

  function fnFindKidsByName($name) {
    $link = getConnection();

    $query = "select * from tb_criancas where nome like '%{$name}%'";

    $rs = mysqli_query($link, $query);

    $kids = array();
    while($row = mysqli_fetch_assoc($rs)) {
      array_push($kids, $row);
    }

    return $kids;
  }

  function fnDeleteKid($id){
    $link = getConnection();

    $query = "delete from tb_criancas where id = {$id}";

    mysqli_query($link, $query);
  }

  function fnUpdateKid($request) {
    $link = getConnection();

    #$query = "update tb_criancas set nome = '{$nome}', email = '{$email}', telefone = '{$telefone}' where id = {$id}";

    mysqli_query($link, $query);
  }
