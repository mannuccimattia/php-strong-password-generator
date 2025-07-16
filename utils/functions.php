<?php

// if length is set, assign it to a variable
if (isset($_GET['length'])) {
  $length = (int)$_GET['length'];

  // if length is empty, alert user and exit
  if ($_GET['length'] === "") {

    echo "<p style='color:red;'>Insert a value from 8 to 20</p>";
    return;
  } elseif (is_numeric($length) && $length >= 8 && $length <= 20) {

    // length is valid and within range, proceed generation
    // string with all possible characters
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!$%&?^+*-_.:,;";

    // generated password string: starts empty
    $password = '';

    // cycle to pick a character from chars string with a random index
    for ($i = 0; $i < $length; $i++) {
      $password .= $chars[random_int(0, strlen($chars) - 1)];
    }

    echo "<h3>Your password:</h3>";
    echo "<div><strong>$password</strong></div>";
  } else {

    echo "<p style='color:red;'>Please enter a number between 8 and 20</p>";
  }
}
