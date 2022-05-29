<?php

// Autoload dari vendor
require_once "vendor/autoload.php";

$login = new app\Login();

if (isset($_POST['b_login'])) {
      $login->login();
      header("location:index.php");
}

if (isset($_POST['b_logout'])) {
      $login->logout();
      header("location:index.php");
}
