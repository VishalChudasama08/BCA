<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Radio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body bgcolor="#5a71f5">
  <div class="container">
  <h2>PHP Radio</h2>
  <form method="get">
    <div class="form-group">
      <label for="name">Your name</label>
	  <input type="text" class="form-control" id="name" planceholder="Your Name" name="yname">
    </div>
	<br>
	<strong>Batch: </strong>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="batch" value="close">Morning
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="batch" value="open">Afternoon
	  </label>
	</div>
	<br>
	<strong>Course: </strong>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="course" value="BCA">BCA
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="course" value="BBA">BBA
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="course" value="Bcom">Bcom
	  </label>
	</div>
	<br>
	<div class="form-check-inline">
      <button type="submit" class="btn btn-info">Submit</button>
	</div>
  </form>
  <?php
    if(isset($_GET["vname"])){
		echo $_GET["vname"];
	}
	br();
	if(isset($_GET["batch"])){
		echo "Batch is ".$_GET["batch"];
	}
	br();
	if(isset($_GET["course"])){
		echo $_GET["course"];
	}
  ?>
  </div>
</body>
</html>