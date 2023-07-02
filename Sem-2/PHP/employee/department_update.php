<?php require_once("connect1.php"); ?>
<html>

<body>
  <?php
  $query = "select * from department where id=" . $_GET['id'] . "";
  $record = mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($record, MYSQLI_ASSOC);
  // ↑↑ this line mysqli_fetch_array() function return table row in array type and MYSQLI_ASSOC this parameter set array values key. key is table feilds name. if use MYSQLI_NUM then set key as number and if use MYSQLI_BOTH then set key as both number and associative
  require_once("menu.php");
  ?>
  <form method="post" action="department_mysqli.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    Department Name : <input type="text" name="department" value="<?= $row['department'] ?>" required> <br>
    Active :
    <input type="radio" name="active" value="1" <?= ($row['active'] == 1) ? "checked" : ""; ?>> Yes
    <input type="radio" name="active" value="0" <?= ($row['active'] == 0) ? "checked" : ""; ?>> No <br>
    <input type="submit" name="submit" value="Update">
  </form>
</body>

</html>