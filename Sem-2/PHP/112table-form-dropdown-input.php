<!DOCTYPE html>
<?php require("extra.php"); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP</title>
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
  <body style="background-color: #0cd2f5;">
    <div class="container">
      <form>
        <table class="table table-bordered table-hover" border="2px">
        <tr>
          <th colspan="4">SALARY SLEEP</th>
        </tr>
        <tr>
          <th>Employ ID : </th>
          <td><input type="text" id="name" name="ei" placeholder="Enter Your ID" class="form-control" required></td>
          <th>Employ Name : </th>
          <td><input type="text" id="rn" name="en" placeholder="Enter Your name" class="form-control" required></td>
        </tr>
        <tr>
          <th>Salary : </th>
          <td colspan="3"><input type="number" id="rn" name="sal" placeholder="Enter Your Salary" class="form-control" required></td>
        </tr>
        <tr>
          <td colspan="2">Department</td>
          <td colspan="2">Desgination</td>
        </tr>
        <tr>
          <td colspan="2">
		    <div class="form-group">
		      <select class="form-control" name="depar">
			    <option>account</option>
			    <option>finance</option>
			    <option>market</option>
			    <option>sales</option>
			  </select>
			</div>
		  </td>
          <td colspan="2">
		    <div class="form-group">
		      <select class="form-control" name="desg">
			    <option>peon</option>
			    <option>clerk</option>
			    <option>manager</option>
			  </select>
			</div>
		  </td>
        </tr>
      </table>

      <button type="submit" name="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;display: block;position: relative;margin: 0px auto;"><strong>Submit</strong></button>

      <?php
        if (isset($_GET["submit"])) {
		  $ta = [
		    "account" => [
			  "peon" => 2,
			  "clerk" => 2,
			  "manager" => 3
			],
			"finance" => [
			  "peon" => 2,
			  "clerk" => 5,
			  "manager" => 2
			],
			"market" => [
			  "peon" => 3,
			  "clerk" => 5,
			  "manager" => 2
			],
			"sales" => [
			  "peon" => 4,
			  "clerk" => 3,
			  "manager" => 3
			]
		  ];
		  $da = [
		    "account" => [
			  "peon" => 3,
			  "clerk" => 5,
			  "manager" => 3
			],
			"finance" => [
			  "peon" => 3,
			  "clerk" => 5,
			  "manager" => 4
			],
			"market" => [
			  "peon" => 2,
			  "clerk" => 5,
			  "manager" => 2
			],
			"sales" => [
			  "peon" => 4,
			  "clerk" => 5,
			  "manager" => 5
			]
		  ];
		  $it = [
		    "account" => [
			  "peon" => 3,
			  "clerk" => 3,
			  "manager" => 2
			],
			"finance" => [
			  "peon" => 2,
			  "clerk" => 5,
			  "manager" => 3
			],
			"market" => [
			  "peon" => 4,
			  "clerk" => 5,
			  "manager" => 2
			],
			"sales" => [
			  "peon" => 4,
			  "clerk" => 3,
			  "manager" => 5
			]
		  ];
      ?>

      <table class="table table-bordered table-hover" border="2px">
        <tr>
          <th colspan="5">SALARY SLEEP</th>
        </tr>
        <tr>
          <th>Employ ID : </th>
          <td><?php echo $_GET["ei"]; ?></td>
          <th>Employ Name : </th>
          <td colspan="2"><?php echo $_GET["en"]; ?></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><?php echo $_GET["depar"]; ?></td>
          <td>Desgination</td>
          <td colspan="2"><?php echo $_GET["desg"]; ?></td>
        </tr>
        <tr>
          <td colspan="4">TA - 
		    <?php
			  $per_ta = $ta[$_GET["depar"]][$_GET["desg"]];
			  echo $per_ta;
			?>%
		  </td>
          <td>
		    <?php
			  $ta_v = (($_GET["sal"] * $per_ta) / 100);
			  echo $ta_v;
			?>
		  </td>
        </tr>
		<tr>
          <td colspan="4">DA - 
		    <?php
			  $per_da = $da[$_GET["depar"]][$_GET["desg"]];
			  echo $per_da;
			?>%
		  </td>
          <td>
		    <?php
			  $da_v = (($_GET["sal"] * $per_da) / 100);
			  echo $da_v;
		    ?>
		  </td>
        </tr>
		<tr>
          <td colspan="4">IT - 
		    <?php
			  $per_it = $it[$_GET["depar"]][$_GET["desg"]];
			  echo $per_it;
			?>%
		  </td>
          <td>
		    <?php
			  $it_v = (($_GET["sal"] * $per_it) / 100); 
			  echo "-".$it_v;
			?>
		  </td>
        </tr>
		<tr>
          <th colspan="4">Total</th>
          <th>
		    <?php
              $total = ($ta_v + $da_v) - ($it_v);
			  echo $total;
		    ?>
		  </th>
        </tr>
		<tr>
          <td colspan="4">Gross Salary</td>
          <td><?php echo $_GET["sal"]; ?></td>
        </tr>
		<tr>
          <th colspan="4">Final Salary</th>
          <th><?php echo ($_GET["sal"] + $total); ?></th>
        </tr>
      </table>

      <?php
        }
      ?>

      <form>
    </div>
   </body>
 </html>