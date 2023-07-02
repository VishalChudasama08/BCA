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
	
	<button type="submit" class="btn btn-danger">Go</button>
  </form>
  <?php
    if(isset($_GET["bc"]) || ($_GET["tc"])){
  ?>
    <p style="background-color: <?php echo $_GET["bc"] ?>; color: <?php echo $_GET["tc"] ?>;font-weight: <?php echo $_GET["b"] ?>;text-decoration-line: <?php echo $_GET["u"] ?>;font-style: <?php echo $_GET["i"] ?>;text-align: center;border-radius: 10px;width: 70%;margin: 0 auto;display: block;padding: 20px;font-size: 25px;">
	  <?php echo $_GET["vname"]; ?>
	</P>
  <?php
    }
  ?>
  </div>
</body>
</html>