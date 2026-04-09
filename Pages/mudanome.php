<?php
  session_start();
  if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
  }
?>
