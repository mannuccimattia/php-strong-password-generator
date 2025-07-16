<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/js/bootstrap.min.js" integrity="sha512-zKeerWHHuP3ar7kX2WKBSENzb+GJytFSBL6HrR2nPSR1kOX1qjm+oHooQtbDpDBSITgyl7QXZApvDfDWvKjkUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Password Generator</title>
  <link rel="stylesheet" href="./css/style.css">
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

  ?>

</body>

</html>