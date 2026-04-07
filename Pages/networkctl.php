<?php
  session_start();
  if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
  }
  $OUT = shell_exec('networkctl status');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Network Information</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="card">
      <h2>Network Information</h2>
      <pre><?= $OUT ?></pre>
      <a href="menu.php" class="back">Back to Menu</a>
    </div>
  </body>
</html>
