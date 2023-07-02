<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP input</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD">
</head>
<body bgcolor="#a571f5">
  <div class="container">
  <h2>PHP Input program</h2>
  <form method="get">
    <div class="form-group">
      <label for="name">Your name : 
	      <input type="text" class="form-control" id="name" planceholder="Your Name" name="vname" style="width: 50%;">
	    </label>
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