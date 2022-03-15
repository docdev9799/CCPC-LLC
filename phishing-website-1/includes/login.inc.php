<?php

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $pwd) !== false) {
      header("location: ../index.php?error=emptyinput");
      exit();
    }
    if (invalidPwd($pwd) !== false) {
      header("location: ../index.php?error=invalidpwd");
      exit();
    }

    createUser($conn, $username, $pwd);