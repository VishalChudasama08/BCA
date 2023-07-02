<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Random Color</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <style>
	table {
		margin: 50px 0px;
	}
	th,td {
		text-align: center;
	}
  </style>
</head>
<body style="background-color: #1dc75d;">
<div class="container">
  <form>
  <table class="table table-bordered table-hover" border="2px">
    <tr>
      <th colspan="4">Marksheet</th>
    </tr>
    <tr>
      <th>Name : </th>
      <td><input type="text" id="name" name="vname" placeholder="Enter Your name" class="form-control" required></td>
      <th>Roll No. : </th>
      <td><input type="number" id="rn" name="rn" placeholder="Enter Your Roll Number" class="form-control" required></td>
    </tr>
	<tr>
	  <td colspan="2">Subjects</td>
	  <td>Theory</td>
	  <td>Internal</td>
	</tr>
	<tr>
	  <td colspan="2">DS</td>
	  <td><input type="number" name="t1" class="form-control" min="0" max="70" required></td>
	  <td><input type="number" name="i1" class="form-control" min="0" max="30" required></td>
	</tr>
	<tr>
	  <td colspan="2">PHP</td>
	  <td><input type="number" name="t2" class="form-control" min="0" max="70" required></td>
	  <td><input type="number" name="i2" class="form-control" min="0" max="30" required></td>
	</tr>
	<tr>
	  <td colspan="2">SED</td>
	  <td><input type="number" name="t3" class="form-control" min="0" max="70" required></td>
	  <td><input type="number" name="i3" class="form-control" min="0" max="30" required></td>
	</tr>
	<tr>
	  <td colspan="2">COA</td>
	  <td><input type="number" name="t4" class="form-control" min="0" max="70" required></td>
	  <td><input type="number" name="i4" class="form-control" min="0" max="30" required></td>
	</tr>
  </table>
  
  <button type="submit" name="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;display: block;position: relative;margin: 0px auto;"><strong>Submit</strong></button>
  
  <?php
    if (isset($_GET["submit"])){
  ?>
  
  <table class="table table-bordered table-hover" border="2px">
    <tr>
      <th colspan="4">Marksheet</th>
    </tr>
    <tr>
      <th>Name : </th>
      <td><?php echo $_GET["vname"] ?></td>
      <th>Roll No. : </th>
      <td><?php echo $_GET["rn"] ?></td>
    </tr>
	<tr>
	  <td colspan="2">Subjects</td>
	  <td>Theory</td>
	  <td>Internal</td>
	</tr>
	<tr>
	  <td colspan="2">DS</td>
	  <td><?php echo $_GET["t1"] ?></td>
	  <td><?php echo $_GET["i1"] ?></td>
	</tr>
	<tr>
	  <td colspan="2">PHP</td>
	  <td><?php echo $_GET["t2"] ?></td>
	  <td><?php echo $_GET["i2"] ?></td>
	</tr>
	<tr>
	  <td colspan="2">SED</td>
	  <td><?php echo $_GET["t3"] ?></td>
	  <td><?php echo $_GET["i3"] ?></td>
	</tr>
	<tr>
	  <td colspan="2">COA</td>
	  <td><?php echo $_GET["t4"] ?></td>
	  <td><?php echo $_GET["i4"] ?></td>
	</tr>
	<tr>
	  <th>Total : </th>
	  <th>
	    <?php
		  $total = $_GET["t1"] + $_GET["t2"] + $_GET["t3"] + $_GET["t4"] + $_GET["i1"] + $_GET["i2"] + $_GET["i3"] + $_GET["i4"];
		  echo $total."/400";
		?>
	  </th>
	  <th>Grade : </th>
	  <th>
	    <?php 
		  $pre = ($total * 100) / 400;
		  if($pre >= 91)
		    echo "A1";
	      else if($pre >= 81)
			echo "A2";
	      else if($pre >= 71)
			echo "B1";
		  else if($pre >= 61)
			echo "B2";
		  else if($pre >= 51)
			echo "C1";
		  else if($pre >= 41)
		    echo "C2";
		  else if($pre >= 33)
			echo "D";
		  else
			echo "E/F";
		?>
	  </th>
	</tr>
	<tr>
	  <th>Percentage : </th>
	  <th><?php echo $pre; ?></th>
	  <th>Result : </th>
	  <th>
	    <?php
          if (($_GET["t1"] >= 28) && ($_GET["t2"] >= 28) && ($_GET["t3"] >= 28) && ($_GET["t4"] >= 28) && ($_GET["i1"] >= 12) && ($_GET["i2"] >= 12) && ($_GET["i3"] >= 12) && ($_GET["i4"] >= 12))
			echo "PASS";
		  else
			echo "FAIL";
        ?>		
	  </th>
	</tr>
  </table>
  
  <?php
    }
  ?>
  
  <form>
</div>
</body>
</html>