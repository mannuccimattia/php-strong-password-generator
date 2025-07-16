<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Password Generator</title>
</head>

<body>

  <h1>Strong Password Generator</h1>


  <form method="GET">

    <label for="pw-length">
      Password Length (8 - 20):
    </label>
    <input type="number" name="length" id="pw-length" min="8" max="20">

    <input type="checkbox" name="unique" id="pw-unique">
    <label for="pw-unique">Unique characters</label>

    <input type="checkbox" name="letters" id="pw-letters">
    <label for="pw-letters">Letters</label>

    <input type="checkbox" name="numbers" id="pw-numbers">
    <label for="pw-numbers">Numbers</label>

    <input type="checkbox" name="symbols" id="pw-symbols">
    <label for="pw-symbols">Symbols</label>

    <button type="submit">Generate</button>

  </form>

  <?php

  require_once "./utils/functions.php";

  ?>

</body>

</html>