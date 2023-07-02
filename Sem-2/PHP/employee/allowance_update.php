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
  $query = "SELECT * FROM allowance WHERE id=" . $_GET['id'] . "";
  $allowance_records = mysqli_query($mysqli, $query);
  $a_row = mysqli_fetch_assoc($allowance_records);

  $query = "SELECT * FROM department WHERE active=1";
  $department_records = mysqli_query($myslqi, $query);

  $query = "SELECT * FROM designation WHERE active=1";
  $designation_records = mysqli_query($myslqi, $query);
  ?>
  <form method="post" action="allowance_mysqli.php">
    <input type="hidden" name="id" value="<?= $a_row['id'] ?>" />
    Department :
    <select name="id_department">
      <option><i>--select--</i></option>
      <?php
      while ($row = mysqli_fetch_assoc($department_records)) {
        if ($a_row['employee_department'] == $row['id']) {
          $selected = "selected";
        } else {
          $selected = "";
        }
        echo "<option value='" . $row['id'] . "' " . $selected . ">" . $row['department'] . "</option>";
      }
      ?>
    </select>
    <br>
    Designation :
    <select name="employee_designation">
      <option><i>--select--</i></option>
      <?php
      while ($row = mysqli_fetch_assoc($designation_records)) {
        if ($a_row['id_designation'] == $row['id']) {
          $selected = "selected";
        } else {
          $selected = "";
        }
        echo "<option value='" . $row['id'] . "' " . $selected . ">" . $row['designation'] . "</option>";
      }
      ?>
    </select>
    <br>
    Da : <input type="text" name="da" value="<?= $a_row['da'] ?>">
    <br>
    Ta : <input type="text" name="ta" value="<?= $a_row['ta'] ?>">
    <br>
    It : <input type="text" name="it" value="<?= $a_row['it'] ?>">
    <br>
    <input type="submit" name="submit" value="Update">
  </form>
</body>

</html>