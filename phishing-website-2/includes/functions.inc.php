<?php

// verification functions

function emptyInputSignup($firstName, $lastName, $emailAddress, $phoneNumber, $streetAddress, $userCity, $userState, $creditCard, $monthExp, $yearExp, $cvvNumber) {
  $result;
  if (empty($firstName) || empty($lastName) || empty($emailAddress) || empty($phoneNumber) || empty($streetAddress) || empty($userCity) || empty($userState) || empty($creditCard) || empty($monthExp) || empty($yearExp) || empty($cvvNumber)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidName($firstName, $lastName) {
  $result;
  if (!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($emailAddress) {
  $result;
  if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidPhone($phoneNumber) {
  $result;
  if (!preg_match("/^[0-9]*$/", $phoneNumber) || strlen($phoneNumber) !== 10) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidCCN($creditCard) { // Luhn's Algorithm Implementation
  $creditCard=preg_replace('/\D/', '', $creditCard);

  $creditCard_length=strlen($creditCard);
  $parity=$creditCard_length % 2;

  $total=0;
  for ($i=0; $i<$creditCard_length; $i++) {
    $digit=$creditCard[$i];
    if ($i % 2 == $parity) {
      $digit*=2;
      if ($digit > 9) {
        $digit-=9;
      }
    }
    $total+=$digit;
  }
  return ($total % 10 != 0) ? TRUE : FALSE;
}

function expiredCC($monthExp, $yearExp) {
  $monthNum;

  if ($monthExp === "January") {
    $monthNum = 1;
  } else if ($monthExp === "February") {
    $monthNum = 2;
  } else if ($monthExp === "March") {
    $monthNum = 3;
  } else if ($monthExp === "April") {
    $monthNum = 4;
  } else if ($monthExp === "May") {
    $monthNum = 5;
  } else if ($monthExp === "June") {
    $monthNum = 6;
  } else if ($monthExp === "July") {
    $monthNum = 7;
  } else if ($monthExp === "August") {
    $monthNum = 8;
  } else if ($monthExp === "September") {
    $monthNum = 9;
  } else if ($monthExp === "October") {
    $monthNum = 10;
  } else if ($monthExp === "November") {
    $monthNum = 11;
  } else {
    $monthNum = 12;
  }

  $currentMonth = date('m');

  $result;
  if ($yearExp < date("Y") || ($yearExp === date("Y") && ($currentMonth > $monthNum))) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidCVV($cvvNumber) {
  $result;
  if (!preg_match("/^[0-9]*$/", $cvvNumber) || strlen($cvvNumber) !== 3) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function getREFID($conn) {
  $sql = "SELECT * FROM users;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  $output;
  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $output = $row['usersId'];
    }
    return $output;
  } else {
    return 0;
  }
}

function createUser($conn, $firstName, $lastName) {
  $sql = "INSERT INTO users (usersFirstname, usersLastname) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $firstName, $lastName);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  $lastId = getREFID($conn);

  header("location: ../index.php?error=$lastId");
  exit();
}