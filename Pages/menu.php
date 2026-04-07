<?php
session_start();
if(!isset($_SESSION['Logado'])){
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="card">
      <h2>Welcome to system</h2>
      <nav>
        <a href="lscpu.php">CPU Information</a>
        <a href="usb.php">USB List</a>
        <a href="ip.php">IP Information</a>
        <a href="systemctl.php">System Information</a>
        <a href="networkctl.php">Network Information</a>
        <a href="mudanome.php">Change VM name</a>
        <a href="logout.php" class="logout">Logout</a>
      </nav>
    </div>
  </body>
</html>
