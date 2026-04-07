<?php
  session_start();
  if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
  }
  $OUT = shell_exec('systemctl status apache2');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>System Information</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="card">
      <h2>Apache2 Status</h2>
      <pre><?= $OUT ?></pre>
      <a href="menu.php" class="back">Back to Menu</a>
    </div>
  </body>
</html>
