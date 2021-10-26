<?php
  include_once 'includes/config.php';

  function getURL($page = ''){
    $page = !strripos($page, '.php') && $page != '' ? $page.'.php' : $page;

    return HOST . '/' . $page;
  }