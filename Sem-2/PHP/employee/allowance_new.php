<?php require_once "connect1.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  require_once "menu.php";
  $query = "SELECT * FROM department";
  $department_records = mysqli_query($mysqli, $query);
  $query = "SELECT * FROM designation";
  $designation_records = mysqli_query($mysqli, $query);
  ?>
  <div style="text-align: center; font-size: 125%; margin: 2% 0px;">
    <form method="post" action="allowance_mysqli.php">
      Department :
      <select name="employee_department">
        <option><i>--select--</i></option>
        <?php
        while ($row = mysqli_fetch_assoc($department_records)) {
          echo "<option value='" . $row['id'] . "'>" . $row['department'] . "</option>";
        }
        ?>
      </select>
      <br>
      Designation :
      <select name="employee_designation">
        <option><i>--select--</i></option>
        <?php
        while ($row = mysqli_fetch_assoc($designation_records)) {
          echo "<option value='" . $row['id'] . "'>" . $row['designation'] . "</option>";
        }
        ?>
      </select>
      <br>
      Da : <input type="text" name="da">
      <br>
      Ta : <input type="text" name="ta">
      <br>
      It : <input type="text" name="it">
      <br>
      <input type="submit" name="submit" value="save">
    </form>
  </div>
</body>

</html>