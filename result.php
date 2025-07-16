<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Your Password</title>

</head>

<body>

  <div class="container-custom bg-dark text-white rounded">

    <h1 class="fw-bold text-primary mb-5">
      Your password
    </h1>

    <div>
      <strong class="px-4 py-3 bg-secondary rounded text-warning">
        <?php echo $_SESSION["password"] ?>
      </strong>
    </div>

    <a href="./index.php" class="btn btn-primary mt-5">
      Generate again
    </a>

  </div>

</body>

</html>