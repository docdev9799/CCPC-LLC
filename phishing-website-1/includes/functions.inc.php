<?php

// Fake log in functions

function emptyInputSignup($username, $pwd) {
  $result;
  if (empty($username) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidPwd($pwd) {
  $result;
  if (strlen($pwd) <= 5) {
    $result = true;
  } else if (!preg_match("/\d/", $pwd)) {
    $result = true;
  } else if (!preg_match("/\W/", $pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function createUser($conn, $username, $pwd) {
  $sql = "INSERT INTO users (usersUid, usersPwd) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $pwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../../phplogin/index.php"); // Return to home page of legitimate site
  exit();
}