<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #80fc03;">
  <div class="container">
    <?php
	  $time = time() + (2 * 60 *60); #day*hours*minutes*second
	  setcookie("color", "grey", "$time");
	?>
  </div>
 </body>
 </html>