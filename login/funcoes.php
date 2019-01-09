<?php
  require('./crud.php');

  function efetuaLogin($request) {
    if(fnLogin($request)) {
      return true;
    }
    return false;
  }
