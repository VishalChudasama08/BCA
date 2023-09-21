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
	  width: 30%;
	  margin: 20px auto;
	  display: block;
	  padding: 20px;
	  font-weight: bold;
	  font-size: 30px;
	}
  </style>
</head>
<body bgcolor="#ebc334">
  <div class="container">
  <form method="get">
	<div class="form-group">
	  <label for="number">Enter Number : 
	    <input type="text" id="number" placeholder="comma(,) Seprated Number" name="number" class="form-control" style="width: 400px;">
	  </label>
	</div>
	
	<br><br>
	
	<label>Choice : </label>
	<label for="max">
	  <input type="radio" id="max" name="Choice" value="max" class="form-check-input">
      Max	  
	</label>
	<label for="min">
	  <input type="radio" id="min" name="Choice" value="min" class="form-check-input">
      Min	  
	</label>
	
	<br><br>
	
	<button type="submit" name="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;"><strong>Go</strong></button>
  </form>
  <?php
	if (isset($_GET["submit"])) {
		$data = explode(",", $_GET["number"]);
		if($_GET["Choice"] == "max") {
			echo "<p>".max($data)."</p>";
		}
		if($_GET["Choice"] == "min") {
			echo "<p>".min($data)."</p>";
		}
    }
  ?>
  </div>
</body>
</html>