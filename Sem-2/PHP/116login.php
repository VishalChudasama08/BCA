<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #03fc90;">
  <?php
    if(isset($_GET['invalid'])){
      echo "<h3 style='color: red'>Invalid email or password</h3>";
	}
  ?>
  <div class="container">
    <form method="post" action="116logincheck.php">
	    Email : <input type="email" id="email" class="form-control" placeholder="Enter email" name="email" required><br>
	    Password : <input type="password" id="password" class="form-control" placeholder="Enter password" name="password" required><br>
	  <button type="submit" name="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;display: block;position: relative;margin: 0px auto;"><strong>Submit</strong></button>
	</form>
  </div>
 </body>
 </html>