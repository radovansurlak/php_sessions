<?php

if(!$_SESSION){
  session_start();
}

$_SESSION["login"] = false;

header("Location: ../php%20login/index.php")

?>
