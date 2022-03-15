<?php

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $emailAddress = $_POST["email"];
    $phoneNumber = $_POST["phone"];
    $streetAddress = $_POST["street"];
    $userCity = $_POST["city"];
    $userState = $_POST["state"];
    $creditCard = $_POST["ccn"];
    $monthExp = $_POST["expmonth"];
    $yearExp = $_POST["expyear"];
    $cvvNumber = $_POST["cvv"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($firstName, $lastName, $emailAddress, $phoneNumber, $streetAddress, $userCity, $userState, $creditCard, $monthExp, $yearExp, $cvvNumber) !== false) {
      header("location: ../index.php?error=emptyinput");
      exit();
    }
    if (invalidName($firstName, $lastName)) {
      header("location: ../index.php?error=invalidname");
      exit();
    }
    if (invalidEmail($emailAddress) !== false) {
      header("location: ../index.php?error=invalidemail");
      exit();
    }
    if (invalidPhone($phoneNumber)) {
      header("location: ../index.php?error=invalidphone");
      exit();
    }
    if (invalidCCN($creditCard)) { // 5555555555554444
      header("location: ../index.php?error=invalidccn");
      exit();
    }
    if (expiredCC($monthExp, $yearExp)) {
      header("location: ../index.php?error=invalidexp");
      exit();
    }
    if (invalidCVV($cvvNumber)) {
      header("location: ../index.php?error=invalidcvv");
      exit();
    }

    createUser($conn, $firstName, $lastName);