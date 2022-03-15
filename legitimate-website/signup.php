<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>CCPCLLC - Register</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="assets/img/logo.png">
      <script src="assets/js/login.js"></script>
      <script src="assets/js/slideshow.js"></script>
    </head>
  <body>

    <div class="header">
      <a href="index.php"><img src="assets/img/logo.png" class="logo"></a>
      <a href="index.php"><h1 class="title">Chocolate-Covered Paper Clips LLC</h1></a>
      <nav>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#section-about">About Us</a></li>
          <li><a href="index.php#section-products">Our Products</a></li>
          <li><a class="current" href="register.php">Register</a></li>
          <li><a href="login.php">Log in</a></li>
        </ul>
      </nav>
    </div>
<div class="wrapper">

<div class="login-page">
  <div class="form">
    <form class="register-form" action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="name">
      <input type="username" name="email" placeholder="email address">
      <input type="text" name="uid" placeholder="username">
      <input type="password" name="pwd" placeholder="password">
      <input type="password" name="pwdrepeat" placeholder="repeat password">
      <button type="submit" name="submit">Sign Up</button/button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
    <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='error'>Please make sure all fields are filled.<p>";
    } else if ($_GET["error"] == "invaliduid") {
      echo "<p class='error'>Invalid Username<p>";
    } else if ($_GET["error"] == "invalidemail") {
      echo "<p class='error'>Invalid Email Address<p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p class='error'>Passwords do not match.<p>";
    } else if ($_GET["error"] == "usernametaken") {
      echo "<p class='error'>User already exists, please choose a different username.<p>";
    } else if ($_GET["error"] == "stmtfailed") {
      echo "<p class='error'>Something went wrong on our end<p>";
    } else if ($_GET["error"] == "invalidpwd") {
      echo "<p class='error'>Password must contain at least one number, one symbol, and must be more than 5 characters long.<p>";
    }
  }
?>
  </div>
</div>

</div>
<div id="container">
  <div id="main">
  </div>
</div>
<footer id="footer"><br>
  <ul class="nav-footer">
    <li><a href="index.php">• Our Paper-Clips</a></li>
    <li><a href="index.php">• Our Chocolate</a></li>
    <li><a href="index.php">• Did you know?</a></li>
  </ul>
  <ul class="nav-footer">
    <li><a href="index.php">• Online contacts</a></li>
    <li><a href="index.php">• How to eat</a></li>
    <li><a href="index.php">• News & Events</a></li>
  </ul>
  <ul class="nav-footer">
    <li><a href="index.php">• Terms of service</a></li>
    <li><a href="index.php">• Customer Reviews</a></li>
  </ul>
  <a href="https://twitter.com"><img src="assets/img/twitter.png" class="icon"></a>
  <a href="https://facebook.com"><img src="assets/img/facebook.png" class="icon"></a>
  <a href="https://instagram.com"><img src="assets/img/instagram.png" class="icon"></a>
  <a href="https://www.youtube.com/"><img src="assets/img/youtube.png" class="icon"></a>
</footer>
</body>
</html>