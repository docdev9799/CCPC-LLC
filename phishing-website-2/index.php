<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>CCPCLLC - Giveaway</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" href="assets/img/logo.png">
      <script src="assets/js/login.js"></script>
      <script src="assets/js/slideshow.js"></script>
    </head>
  <body>

    <div class="header">
      <img src="assets/img/logo.png" class="logo">
      <h1 class="title">Chocolate-Covered Paper Clips LLC</h1>
    </div>
<div class="wrapper">

<form class="register-form" action="includes/verify.inc.php" method="post">
<div class="login-page">
  <div class="form" style="background:#3b2e28;">
    <p class="message">Step 1: Select Quantity</p>
    <p class="message" style="text-align:left">
      _____________________________________________<br><br>
      Item(s):
      <br>_____________________________________________<br><br>
      (1) CC Paperclip Variety Pack : <strike>22.99$</strike><br>
      (2) CC Paperclip Variety Pack : <strike>22.99$</strike><br>
      (3) CC Paperclip Variety Pack : <strike>22.99$</strike><br>
      (4) CC Paperclip Variety Pack : <strike>22.99$</strike><br>
      (5) CC Paperclip Variety Pack : <strike>22.99$</strike><br>
      (6) Shipping & Handling : 1.00$<br></p>
      <p class="message" style="text-align:left;color:rgb(0, 255, 0)">Total: 1.00$</p>
    <br>
    </form>
  </div>
  <div class="form" style="background:#443530">
    <p class="message">Step 2: Shipping Information</p><br><br><br><br>
      <input type="text" name="firstname" placeholder="first name" style="width:197px">
      <input type="text" name="lastname" placeholder="last name" style="width:197px"><br>
      <input type="username" name="email" placeholder="email address"><br>
      <input type="text" name="phone" placeholder="phone number"><br>
      <input type="text" name="street" placeholder="street address"><br>
      <input type="text" name="city" placeholder="city"><br>
      <input type="text" name="state" list="state" placeholder="State">
      <datalist id="state">
        <option value="Alabama">
        <option value="Alaska">
        <option value="Arizona">
        <option value="Arkansas">
        <option value="California">
        <option value="Colorado">
        <option value="Connecticut">
        <option value="Delaware">
        <option value="Florida">
        <option value="Georgia">
        <option value="Hawaii">
        <option value="Idaho">
        <option value="Illinois">
        <option value="Indiana">
        <option value="Iowa">
        <option value="Kansas">
        <option value="Kentucky">
        <option value="Louisiana">
        <option value="Maine">
        <option value="Maryland">
        <option value="Massachusetts">
        <option value="Michigan">
        <option value="Minnesota">
        <option value="Mississippi">
        <option value="Missouri">
        <option value="Montana">
        <option value="Nebraska">
        <option value="Nevada">
        <option value="New Hampshire">
        <option value="New Jersey">
        <option value="New Mexico">
        <option value="New York">
        <option value="North Carolina">
        <option value="North Dakota">
        <option value="Ohio">
        <option value="Oklahoma">
        <option value="Oregon">
        <option value="Pennsylvania">
        <option value="Rhode Island">
        <option value="South Carolina">
        <option value="South Dakota">
        <option value="Tennessee">
        <option value="Texas">
        <option value="Utah">
        <option value="Vermont">
        <option value="Virginia">
        <option value="Washington">
        <option value="West Virginia">
        <option value="Wisconsin">
        <option value="Wyoming">
      </datalist>
    </form>
  </div>
  <div class="form" style="background:#473831">
    <p class="message">Step 3: Payment Information</p><br>
    <img style="width:380px;" src="assets/img/trust-badges.png"></img>
    <br><br><br><input type="text" name="ccn" placeholder="credit card number"><br>
    <input type="text" name="expmonth" list="expmonth" placeholder="Expiration Month" style="width:197px">
    <datalist id="expmonth">
      <option value="January">
      <option value="February">
      <option value="March">
      <option value="April">
      <option value="May">
      <option value="June">
      <option value="July">
      <option value="August">
      <option value="September">
      <option value="October">
      <option value="November">
      <option value="December">
    </datalist>
    <input type="text" name="expyear" list="expyear" placeholder="Expiration Year" style="width:197px"><br>
    <datalist id="expyear">
      <option value="2021">
      <option value="2022">
      <option value="2023">
      <option value="2024">
      <option value="2025">
      <option value="2026">
      <option value="2027">
      <option value="2028">
      <option value="2029">
    </datalist>
      <input type="password" name="cvv" placeholder="cvv"><br>
      <button type="submit" name="submit">Order Now</button/button>
    </form>
<?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='error'>Error: Please make sure all fields are filled.<p>";
    } else if ($_GET["error"] == "invalidname") {
      echo "<p class='error'>Error: Your name cannot contain any special characters.<p>";
    } else if ($_GET["error"] == "invalidemail") {
      echo "<p class='error'>Error: Please enter a valid email address.<p>";
    } else if ($_GET["error"] == "invalidphone") {
      echo "<p class='error'>Error: Please enter a valid phone number.<p>";
    } else if ($_GET["error"] == "invalidccn") {
      echo "<p class='error'>Error: Please enter a valid credit card number.<p>";
    } else if ($_GET["error"] == "invalidexp") {
      echo "<p class='error'>Error: Expiration error.<p>";
    } else if ($_GET["error"] == "invalidcvv") {
      echo "<p class='error'>Error: CVV error.<p>";
    } else {
      $lastId = $_GET["error"]+1000000000;
      $alert = "<script>alert('Transaction Declined: The cc payment type [Hipercard] and/or currency [USD] is not accepted. REFID: ' + $lastId);</script>";
      echo $alert;
    }
  }
?>
</div>

</div>
</body>
</html>