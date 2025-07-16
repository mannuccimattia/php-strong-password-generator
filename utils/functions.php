<?php
// starting session
session_start();

// if length is set, assign it to a variable
if (isset($_GET['length'])) {
  $length = (int)$_GET['length'];

  // if length is empty, alert user and exit
  if ($_GET['length'] === "") {

    echo "<div class=' alert alert-danger mt-3'>Insert a value from 8 to 20</div>";
    return;
  } elseif (is_numeric($length) && $length >= 8 && $length <= 20) {
    // length is valid and within range, proceed generation

    // array of all possible characters
    $all_chars = [
      "letters" => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
      "numbers" => "0123456789",
      "symbols" => "!$%&?^+*-_.:,;"
    ];

    // initialize final characters string: starts empty
    $chars = "";

    // check if at least one character group is selected
    if (!key_exists("letters", $_GET) && !key_exists("numbers", $_GET) && !key_exists("symbols", $_GET)) {
      echo "<div class=' alert alert-danger mt-3'>Select at least one group of characters</div>";
      return;
    }

    // cycle each character group's key. For each key then cycle $_GET keys. If a match is found add the value of that character group to the final string
    foreach ($all_chars as $key => $value) {
      foreach ($_GET as $GET_key => $GET_value) {
        if ($GET_key === $key) {
          $chars .= $value;
        }
      }
    }

    // initialized generated password string: starts empty
    $password = '';

    // cycle to pick a character from chars string with a random index
    for ($i = 0; $i < $length; $i++) {

      // logic if unique characters is set
      if (isset($_GET["unique"])) {
        // check if there are enough unique characters available
        if (strlen($chars) < $length) {
          echo "<div class='alert alert-danger mt-3'>Cannot generate unique password: not enough character types selected for length $length</div>";
          return;
        }

        // get a random character from chars, if already present in password get a new one until unique
        do {
          $bit = $chars[random_int(0, strlen($chars) - 1)];
        } while (str_contains($password, $bit));

        // add character to password
        $password .= $bit;
      } else {
        // logic if not unique characters
        // get a random character from chars and add it to password
        $bit = $chars[random_int(0, strlen($chars) - 1)];
        $password .= $bit;
      }
    }

    $_SESSION["password"] = $password;
    header("Location: ./result.php");
  } else {
    // alert if length is out of range (url param edit)
    echo "<div class='alert alert-danger mt-3'>Please enter a number between 8 and 20</div>";
  }
}
