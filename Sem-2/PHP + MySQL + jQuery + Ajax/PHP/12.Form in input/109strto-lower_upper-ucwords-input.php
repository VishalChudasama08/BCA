<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP input</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <style>
    p {
	  text-align: center;
	  background-color: rgb(68,238,221);
	  color: #0d0d0d;
	  border: 3px;
	  border-radius: 10px;
	  width: 70%;
	  margin: 20px auto;
	  display: block;
	  padding: 20px;
	}
  </style>
</head>
<body bgcolor="#ebc334">
  <div class="container">
  <form method="get">
	<label for="yourname">Your Name : 
	  <input type="text" id="yourname" placeholder="Your Name" name="vname" class="form-control">
	</label>
	
	<br><br>
	
	<label>Text Type : </label>
	<label for="upper">
	  <input type="radio" id="upper" name="texttype" value="strtoupper" class="form-check-input">
      Upper Case
	</label>
	<label for="lower">
	  <input type="radio" id="lower" name="texttype" value="strtolower" class="form-check-input">
      Lower Case	  
	</label>
	<label for="ucwords">
	  <input type="radio" id="ucwords" name="texttype" value="ucwords" class="form-check-input">
      Ucwords	  
	</label>
	
	<br><br>
	
	<button type="submit" name="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;"><strong>Go</strong></button>
  </form>
  <?php
	if (isset($_GET["submit"])) {
		/* if ($_GET["texttype"] == "strtoupper") {
			echo "<p>".strtoupper($_GET["vname"])."</p>";
		}
		if ($_GET["texttype"] == "strtolower") {
			echo "<p>".strtolower($_GET["vname"])."</p>";
		}
		if ($_GET["texttype"] == "ucwords") {
			echo "<p>".ucwords($_GET["vname"])."</p>";
		} */
		
		if ($_GET["texttype"] == "ucwords") {
			echo "<p>".ucwords(strtolower($_GET["vname"]))."</p>"; # runing first strtolower and then run ucwords
		}
		else {
			echo "<p>".$_GET["texttype"]($_GET["vname"])."</p>";
		}
    }
  ?>
  </div>
</body>
</html>