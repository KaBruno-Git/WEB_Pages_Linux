<?php
  session_start();
  if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
  }
  $OUT = shell_exec('lscpu');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CPU Information</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="card">
      <h2>CPU Information</h2>
      <pre><?= $OUT ?></pre>
      <a href="menu.php" class="back">Back to Menu</a>
    </div>
  </body>
</html>
