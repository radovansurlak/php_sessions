<?php
  if (!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_POST["username"]) or !isset($_POST["password"])){
    die("<h1>access was denied by condition</h1>");
  }


  define("USERNAME", "rado");
  define("PASSWORD", "password");

  if($_POST["username"] == USERNAME and $_POST["password"] == PASSWORD) {
    $_SESSION["login"] = true;
    header("Location: ../php%20gallery/index.php");
    die();
  } else {
    header("Location: index.php?message=na");
  };

?>
