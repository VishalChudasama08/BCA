<?php
require_once("connect1.php");
extract($_POST);
if (isset($submit) && $submit == "Save") {
  $query = "insert into designation(designation, active) values('" . $designation . "', 1)";
}
if (isset($submit) && $submit == "Delete") {
  $ids = implode(",", $id);
  $query = "delete from designation where id IN (" . $ids . ")";
}
if (isset($submit) && $submit == "Update") {
  $query = "UPDATE designation SET designation='" . $designation . "', active='" . $active . "' WHERE id='" . $id . "'";
}
if (mysqli_query($mysqli, $query)) {
  header("location:designation.php");
} else {
  echo mysqli_error($mysqli);
  echo "<br>";
  echo $query;
}
