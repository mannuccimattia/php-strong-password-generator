<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Your Password</title>

</head>

<body>
  <h1>Your password</h1>

  <div>
    <strong>
      <?php echo $_SESSION["password"] ?>
    </strong>
  </div>

  <a href="./index.php">Generate again</a>

</body>

</html>