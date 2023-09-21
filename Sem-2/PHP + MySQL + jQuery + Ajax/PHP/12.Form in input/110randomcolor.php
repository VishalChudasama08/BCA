<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Random Color</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <style>
    body {
		  background-color: <?php echo randcolor(); ?>;
	  }
  </style>
</head>
<body>
  <?php echo randcolor(); ?>
  <!-- 
  ↓↓good color collection ↓↓
  #1dc75d
  -->
</body>
</html>