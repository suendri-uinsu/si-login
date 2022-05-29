<?php

// Autoload dari vendor
require_once "vendor/autoload.php";

session_start();

if (isset($_SESSION['login']) and $_SESSION['login'] == true) {
      include_once "layouts/dashboard.php";
} else {
      include_once "layouts/home.php";
}

