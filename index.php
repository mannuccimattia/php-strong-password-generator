<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Password Generator</title>
</head>

<body>

  <div class="container-custom bg-dark text-white rounded">

    <h1 class="fw-bold text-primary mb-5">Strong Password Generator</h1>

    <form method="GET">

      <div class="input-group flex-column  w-50 m-auto bg-secondary rounded p-3">

        <div class="wrapper d-flex justify-content-between px-5">
          <label for="pw-length">
            Password Length (8 - 20):
          </label>
          <input type="number" name="length" id="pw-length" min="8" max="20" value="8">
        </div>

        <div class="wrapper my-5 d-flex justify-content-between px-5">
          <label for="pw-unique">Unique characters</label>
          <input type="checkbox" name="unique" id="pw-unique">
        </div>

        <div class="wrapper">
          <h6 class="fw-bold">Choose one or more</h6>

          <div class="d-flex justify-content-between px-5">
            <label for="pw-letters">Letters</label>
            <input type="checkbox" name="letters" id="pw-letters">
          </div>

          <div class="d-flex justify-content-between px-5">
            <label for="pw-numbers">Numbers</label>
            <input type="checkbox" name="numbers" id="pw-numbers">
          </div>

          <div class="d-flex justify-content-between px-5">
            <label for="pw-symbols">Symbols</label>
            <input type="checkbox" name="symbols" id="pw-symbols">
          </div>
        </div>

      </div>

      <button type="submit" class="btn btn-primary mt-5">Generate</button>

    </form>

    <?php

    require_once "./utils/functions.php";

    ?>

  </div>

</body>

</html>