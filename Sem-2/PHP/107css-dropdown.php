<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP input</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body bgcolor="blueviolet">
  <div class="container">
    <form method="GET">
      <label for="yourname">Your Name :
        <input type="text" id="yourname" placeholder="Your Name" name="vname" class="form-control">
      </label>

      <br><br>

      <label>Background Color : </label>
      <label for="orange">
        <input type="radio" id="orange" name="bc" value="orange" class="form-check-input">
        Orange
      </label>
      <label for="red">
        <input type="radio" id="red" name="bc" value="red" class="form-check-input">
        Red
      </label>
      <label for="cyan">
        <input type="radio" id="cyan" name="bc" value="cyan" class="form-check-input">
        Cyan
      </label>

      <br><br>

      <label>Text Color : </label>
      <label for="green">
        <input type="radio" id="green" name="tc" value="green" class="form-check-input">
        Green
      </label>
      <label for="Blue">
        <input type="radio" id="Blue" name="tc" value="blue" class="form-check-input">
        Blue
      </label>
      <label for="yellow">
        <input type="radio" id="yellow" name="tc" value="yellow" class="form-check-input">
        Yellow
      </label>

      <br><br>

      <label>Style : </label>
      <label for="bold">
        <input type="checkbox" id="bold" name="b" value="bold" class="form-check-input">
        Bold
      </label>
      <label for="underline">
        <input type="checkbox" id="underline" name="u" value="underline" class="form-check-input">
        Underline
      </label>
      <label for="italic">
        <input type="checkbox" id="italic" name="i" value="italic" class="form-check-input">
        Italic
      </label>

      <br><br>

      <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Font Size
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <input class="dropdown-item" type="submit" name="fz" value="5px">
          <input class="dropdown-item" type="submit" name="fz" value="10px">
          <input class="dropdown-item" type="submit" name="fz" value="15px">
          <input class="dropdown-item" type="submit" name="fz" value="20px">
          <input class="dropdown-item" type="submit" name="fz" value="25px">
          <input class="dropdown-item" type="submit" name="fz" value="30px">
          <input class="dropdown-item" type="submit" name="fz" value="35px">
          <input class="dropdown-item" type="submit" name="fz" value="40px">
          <input class="dropdown-item" type="submit" name="fz" value="45px">
          <input class="dropdown-item" type="submit" name="fz" value="50px">

        </div>
      </div>

      <br><br>

      <button type="submit" class="btn btn-danger" style="padding: 5px 35px;font-size: 25px;"><strong>Go</strong></button>
    </form>
    <?php
    if (isset($_GET["bc"]) || ($_GET["tc"]) || ($_GET["b"]) || ($_GET["i"]) || ($_GET["u"]) || ($_GET["fz"])) {
    ?>
      <p style="background-color: <?php echo $_GET["bc"] ?>; color: <?php echo $_GET["tc"] ?>;font-weight: <?php echo $_GET["b"] ?>;text-decoration-line: <?php echo $_GET["u"] ?>;font-style: <?php echo $_GET["i"] ?>;font-size: <?php echo $_GET["fz"] ?>;text-align: center;border-radius: 10px;width: 70%;margin: 20px auto;display: block;padding: 20px;">
        <?php echo $_GET["vname"]; ?>
      </P>
    <?php
      }
    ?>
  </div>
</body>
</html>