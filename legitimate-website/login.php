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
      <a href="index.php"><img src="assets/img/logo.png" class="logo"></a>
      <a href="index.php"><h1 class="title">Chocolate-Covered Paper Clips LLC</h1></a>
      <nav>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#section-about">About Us</a></li>
          <li><a href="index.php#section-products">Our Products</a></li>
          <li><a href="signup.php">Register</a></li>
          <li><a class="current" href="login.php">Log in</a></li>
        </ul>
      </nav>
    </div>
<div class="wrapper">
  
<div class="login-page">
  <div class="form">
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="username/email">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Log In</button/button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    </form>
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Please make sure all fields are filled.<p>";
      } else if ($_GET["error"] == "wronglogin") {
        echo "<p class='error'>Incorrect login, please sign up or try again.<p>";
      } else if ($_GET["error"] == "none") {
        echo "<p class='success'>Congratulations! You have successfully created your account!<p>";
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