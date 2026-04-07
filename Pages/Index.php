<?php
  session_start();

  $LG = $_POST['lg'];
  $PW = $_POST['pw'];

  if($LG == "kauan" && $PW == "14112001"){
    $_SESSION['Logado'] = true;
    header("Location: menu.php");
    exit();
  }
?>

<!DOCTYPE html>

<html>

  <head>
    <meta charset = "UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

  <div class="card">

    <h1>Acess</h1>

    <form method="post">

      <div>
        <label for="lg">Login:</label>
        <input type="text" id="lg" name="lg" required>
      </div>

      <div>
        <label for="pw">Password:</label>
        <input type="password" id="pw" name="pw" required>
      </div>

      <input type="submit" value="Enter">

    </form>

  </div>

  </body>

</html>
