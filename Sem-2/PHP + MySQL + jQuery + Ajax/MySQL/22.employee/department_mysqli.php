<?php
require_once("connect1.php");
extract($_POST);
if (isset($submit) && $submit == "Save") {
  $query = "insert into department(department, active) values('" . $department . "', 1)";
}
if (isset($submit) && $submit == "Delete") {
  $ids = implode(",", $id);
  $query = "delete from department where id IN (" . $ids . ")";
}
if (isset($submit) && $submit == "Update") {
  $query = "UPDATE department SET department='" . $department . "', active='" . $active . "' WHERE id='" . $id . "'";
}
if (mysqli_query($mysqli, $query)) {
  header("location:department.php");
} else {
  echo mysqli_error($mysqli);
  echo "<br>";
  echo $query;
}
