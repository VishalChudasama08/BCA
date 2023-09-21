<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
  <body style="background-color: #4df20c;">
    <div class="container">
      <form method="post" enctype="multipart/form-data" action="121extensin.php">
		<label>Your Name</label>
		<input type="text" class="form-control" name="name">
		<br>
		<label>Select File</label>
		<input type="file" class="form-control" name="file">
		<br>
		<input type="submit" class="btn btn-primary" value="upload" name="submit">
      </form>
    </div>
   </body>
 </html>