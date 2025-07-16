<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Password Generator</title>
</head>

<body>

  <h1>Strong Password Generator</h1>


  <form method="GET">
    <label>
      Password Length (8 - 20):
      <input type="number" name="length" min="8" max="20">
    </label>
    <button type="submit">Generate</button>
  </form>

  <?php

  require_once "./utils/functions.php";

  ?>

</body>

</html>