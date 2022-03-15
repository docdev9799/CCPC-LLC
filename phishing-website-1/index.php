<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>CCPCLLC - Login</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="assets/img/logo.png">
      <script src="assets/js/login.js"></script>
    </head>
  <body>

    <div class="header">
      <img src="assets/img/logo.png" class="logo">
      <h1 class="title">Chocolate-Covered Paper Clips LLC</h1>
<div class="wrapper">
<br><br><br><br>
<div class="login-page">
  <div class="form">
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="username/email">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Log In</button/button>
    </form>
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Please make sure all fields are filled.<p>";
      } else if ($_GET["error"] == "invalidpwd") {
        echo "<p class='error'>Incorrect login, please sign up or try again.<p>";
      }
    }
  ?>
  </div>
</div>

</div>
</body>
</html>