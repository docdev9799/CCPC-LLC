<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>CCPCLLC - Home</title>
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
          <li><a class="current" href="index.php">Home</a></li>
          <li><a href="#section-about">About Us</a></li>
          <li><a href="#section-products">Our Products</a></li>
          <?php
          if (isset($_SESSION["useruid"])) {
            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
          } else {
            echo "<li><a href='signup.php'>Register</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";
          }
        ?>
        </ul>
      </nav>
    </div>
<div class="wrapper">
  
  <br>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="assets/img/slide1.png" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="assets/img/slide1.png" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="assets/img/slide1.png" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align:center">
    <script>currentSlide(1)</script>
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <script>currentDot(1)</script>
  </div>

  <div class="box-content">
    <div class="box" style="background:#3b2e28;">
      <img src="assets/img/icon1.png" style="width:40px;">
      <p class="text">Chocolate covered paper clips are a new delicious treat that everybody should buy. With one bite, you will fall in love with the taste of these little chocolate covered paper clips. When you hold them in your mouth, you will be sure that you are eating the best tasting chocolate covered paper clips in the world. You will be sure that you are eating the best treat that you could ever have. When you have one of these chocolate covered paper clips, you could have a whole meal.
        <br><br><a href="register.php">Read more ➤</a></p>
    </div>
    <div class="box" style="background:#443530">
      <img src="assets/img/icon1.png" style="width:40px">
      <p class="text">It is so good, you will want to have more than one. You could have them for breakfast, lunch, or dinner. You could have them for all three meals. They are so good, you will want to have them for all three meals. You could get any of these chocolate covered paper clips. You will want to get all of them. You will want to get them all so you can have them for all three meals of the day.
        <br><br><br><br><br><a href="register.php">Read more ➤</a></p>
    </div>
    <div class="box" style="background:#473831">
      <img src="assets/img/icon1.png" style="width:40px;">
      <p class="text">One of our verified customer reviews; "I was in the store when I saw these chocolate covered paper clips. I had to try one. I had to taste one. I had to eat one. I was amazed when I tasted it. It was the best tasting chocolate covered paper clip that I ever had. I was so glad that I bought it!" - Bob Jones
        <br><br><br><br><br><br><br><a href="register.php">Read more ➤</a></p>
    </div>
</div>

<div class="section-about">
  <h2 id="section-about" class="about-us">About us</h2>
  <p class="text">CCPCLLC is a small corporation that makes the best chocolate covered paper clips. We make our chocolate covered paper clips with the finest ingredients. We do not use any preservatives. We do not use any chemicals. We do not use any artificial ingredients. All of our ingredients are natural ingredients. We use real milk, real sugar, and real chocolate. We do not use any artificial flavors. We only use the finest ingredients.
    <br>
    <br>
    We promise that our chocolate covered paper clips are fresh. We freeze our chocolate covered paper clips until they are ready to be shipped. We do not want you to wait a long time for your chocolate covered paper clips. We want you to get them as soon as you can. We want you to get them as soon as you want them.
    <br>
    <br>
    We know that you will be satisfied with your chocolate covered paper clips. We know that you will be happy with your chocolate covered paper clips. We know that you will be glad that you bought them. We know that you will want to buy more of them. We know that you will want to buy them for all three meals of the day. We know that you will want to do this. So, do not wait any longer. Buy your chocolate covered paper clips now!</p>
</div>

<div class="product-content">
  <h2 id="section-products" class="our-products">Our products</h2>
  <div class="product" style="background:#3b2e28;">
    <p class="text">Dark Chocolate-Covered Paper Clips</p>
    <img class="image" src="assets/img/ph.png">
    <p class="text"><a href="register.php">Order now ➤</a></p>
  </div>
  <div class="product" style="background:#443530">
    <p class="text">Milk Chocolate-Covered Paper Clips</p>
    <img class="image" src="assets/img/ph.png">
    <p class="text"><a href="register.php">Order now ➤</a></p>
  </div>
  <div class="product" style="background:#473831">
    <p class="text">White Chocolate-Covered Paper Clips</p>
    <img class="image" src="assets/img/ph.png">
    <p class="text"><a href="register.php">Order now ➤</a></p>
  </div>
</div>

</div>
  <div id="container">
    <div id="main">
    </div>
  </div>
  <footer id="footer"><br>
    <ul class="nav-footer">
      <li><a href="register.php">• Our Paper-Clips</a></li>
      <li><a href="register.php">• Our Chocolate</a></li>
      <li><a href="register.php">• Did you know?</a></li>
    </ul>
    <ul class="nav-footer">
      <li><a href="register.php">• Online contacts</a></li>
      <li><a href="register.php">• How to eat</a></li>
      <li><a href="register.php">• News & Events</a></li>
    </ul>
    <ul class="nav-footer">
      <li><a href="register.php">• Terms of service</a></li>
      <li><a href="register.php">• Customer Reviews</a></li>
    </ul>
    <a href="https://twitter.com"><img src="assets/img/twitter.png" class="icon"></a>
    <a href="https://facebook.com"><img src="assets/img/facebook.png" class="icon"></a>
    <a href="https://instagram.com"><img src="assets/img/instagram.png" class="icon"></a>
    <a href="https://www.youtube.com/"><img src="assets/img/youtube.png" class="icon"></a>
  </footer>
</body>
</html>