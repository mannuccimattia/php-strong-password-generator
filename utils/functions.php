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
        // Check if we have enough unique characters available
        if (strlen($chars) < $length) {
          echo "<div class='alert alert-danger mt-3'>Cannot generate unique password: not enough character types selected for length $length</div>";
          return;
        }

        // Keep trying until we find a unique character
        do {
          $bit = $chars[random_int(0, strlen($chars) - 1)];
        } while (str_contains($password, $bit));

        $password .= $bit;
      } else {
        // logic if not unique characters
        $bit = $chars[random_int(0, strlen($chars) - 1)];
        $password .= $bit;
      }
    }

    $_SESSION["password"] = $password;
    header("Location: ./result.php");
  } else {

    echo "<div class='alert alert-btn mt-3'>Please enter a number between 8 and 20</div>";
  }
}
