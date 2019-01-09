<?php

  define("__SERVER__", "ol5tz0yvwp930510.cbetxkdyhwsb.us-east-1.rds.amazonaws.com");
  define("__USER__", "n3oo0h0sfg6xlg01");
  define("__PASS__", "eixkcfgx1637kptz");
  define("__DB__", "ammixai60dixbzla");
  define("__PORT__", 3306);

  function getConnection() {
    $link = mysqli_connect(__SERVER__, __USER__, __PASS__, __DB__, __PORT__);

    mysqli_set_charset($link, "utf-8");

    return $link;
  }
