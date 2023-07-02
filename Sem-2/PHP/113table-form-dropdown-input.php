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
<body style="background-color: #4df20c;">
  <div class="container">
    <form>
      <table class="table table-bordered table-hover" border="2px">
        <tr>
          <th colspan="4">SALARY SLEEP</th>
        </tr>
        <tr>
          <th>Employ ID : </th>
          <td><input type="text" id="name" name="ei" placeholder="Enter Your ID" class="form-control" value="<?= isset($_GET['ei']) ? $_GET['ei'] : ''; ?>" required></td>
          <th>Employ Name : </th>
          <td><input type="text" id="rn" name="en" placeholder="Enter Your name" class="form-control" value="<?= isset($_GET['en']) ? $_GET['en'] : ''; ?>" required></td>
        </tr>
        <tr>
          <th>Salary : </th>
          <td colspan="3"><input type="number" id="rn" name="sal" placeholder="Enter Your Salary" class="form-control" value="<?= isset($_GET['sal']) ? $_GET['sal'] : ''; ?>" required></td>
        </tr>
        <tr>
          <td colspan="2">Department</td>
          <td colspan="2">Desgination</td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="form-group">
              <select class="form-control" name="depar">
                <option>-- select --</option>
                <?php
                $department = ["account", "finance", "market", "sales"];
                foreach ($department as $dep) {
                  $selected = (isset($_GET["depar"]) && $_GET["depar"] == $dep) ? "selected" : "";
                  echo "<option ".$selected.">".$dep."</option>";
                }
                ?>
              </select>
            </div>
          </td>
          <td colspan="2">
            <div class="form-group">
              <select class="form-control" name="desg">
                <option>-- select --</option>
              <?php
              $desgination = ["peon", "clerk", "managerv"];
              foreach ($desgination as $des) {
                $selected = (isset($_GET["desg"]) && $_GET["desg"] == $des) ? "selected" : "";
                echo "<option ".$selected.">".$des."</option>";
              }
              ?>
            </select>
          </div>
        </td>
      </tr>
    </table>


    <button type="submit" name="submit" class="btn btn-danger" style="padding: 1px 30px;font-size: 25px;display: block;position: relative;margin: 0px auto;"><strong>Submit</strong></button>

    <?php
    extract($_GET); #using all name attribute convert to array variable
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
          <td><?= $ei ?></td>
          <th>Employ Name : </th>
          <td colspan="2"><?= $en ?></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><?= $depar ?></td>
          <td>Desgination</td>
          <td colspan="2"><?= $desg ?></td>
        </tr>
        <tr>
          <td colspan="4">TA -
            <?= $ta[$depar][$desg] ?>%
          </td>
          <td>
            <?php
            $ta_v = (($sal * $ta[$depar][$desg]) / 100);
            echo $ta_v;
            ?>
          </td>
        </tr>
        <tr>
          <td colspan="4">DA -
            <?= $da[$depar][$desg] ?>%
          </td>
          <td>
            <?php
            $da_v = (($sal * $da[$depar][$desg]) / 100);
            echo $da_v;
            ?>
          </td>
        </tr>
        <tr>
          <td colspan="4">IT -
            <?= $it[$depar][$desg] ?>%
          </td>
          <td>-
            <?php
            $it_v = (($sal * $it[$depar][$desg]) / 100);
            echo $it_v;
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
          <td><?= $sal ?></td>
        </tr>
        <tr>
          <th colspan="4">Final Salary</th>
          <th><?= ($sal + $total) ?></th>
        </tr>
      </table>

      <?php
    } ?>
    <form>
    </div>
  </body>
</html>