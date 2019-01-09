<?php
  require('./crud.php');

  function setKid($request, $foto) {
    if(fnCreateKid($request, $foto)) {
      return true;
    }
    return false;
  }

  function updateUser($id, $nome, $email, $telefone) {
    if(fnUpdateUser($id, $nome, $email, $telefone)) {
      return true;
    }
    return false;
  }

  function getKids() {
    if($kids = fnListKids()) {
      return $kids;
    }
    return array();
  }

  function getKidById($id) {
    if($kid = fnFindKidById($id)) {
      return $kid;
    }
    return array();
  }

  function getUsersByName($name) {
    if($users = fnListUsersByName($name)) {
      return $users;
    }
    return array();
  }

  function deleteUser($id) {
    if(fnDeleteUser($id)) {
      return true;
    }
    return false;
  }
