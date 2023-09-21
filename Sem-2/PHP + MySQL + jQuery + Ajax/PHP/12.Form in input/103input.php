<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP input</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body bgcolor="#a571f5">
  <div class="container">
  <h2>PHP Input program</h2>
  <form method="get">
    <div class"form-group">
      <label for="name">Your name : </label>
	  <input type="text" class="form-control" id="name" planceholder="Your Name" name="vname" style="width: 50%;">
	  <br>
      <button type="submit" class="btn btn-info">Submit</button>
    </div>
  </form>
  </div>
  <?php
    if(isset($_GET["vname"])){
		echo $_GET["vname"];
	}
  ?>
</body>
</html>