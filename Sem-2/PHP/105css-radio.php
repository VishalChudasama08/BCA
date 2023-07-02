<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP input</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body bgcolor="blueviolet">
  <div class="container">
  <form method="get">
    <label for="yourname">Your Name : 
	  <input type="text" id="yourname" value="yourname" name="vname" class="form-control">
	</label>
	<br>
    <label>Background Color : </label>
	<label for="lightgreen">
	  <input type="radio" id="lightgreen" name="bc" value="lightgreen">
      LightGreen	  
	</label>
	<label for="lightpink">
	  <input type="radio" id="lightpink" name="bc" value="lightpink">
      LightPink	  
	</label>
	<label for="lightyellow">
	  <input type="radio" id="lightyellow" name="bc" value="cyan">
      Cyan	  
	</label>
	<br>
	<label>Text Color</label>
	<label for="green">
	  <input type="radio" id="green" name="tc" value="green">
      Green	  
	</label>
	<label for="pink">
	  <input type="radio" id="pink" name="tc" value="pink">
      Pink	  
	</label>
	<label for="yellow">
	  <input type="radio" id="yellow" name="tc" value="yellow">
      Yellow	  
	</label>
	<br>
	<button type="submit" class="btn btn-danger">Go</button>
  </form>
  <?php
    if(isset($_GET["bc"]) && ($_GET["tc"])){
  ?>
    <p style="background-color: <?php echo $_GET["bc"] ?>; color: <?php echo $_GET["tc"] ?>;">
	  <?php echo $_GET["vname"]; ?>
	</P>
  <?php
    }
  ?>
  </div>
</body>
</html>