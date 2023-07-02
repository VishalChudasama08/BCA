<?php
extract($_POST);
$encrypt = md5($password); //74108520
if ($email == "okay@gmail.com" && $encrypt == "a49dbc19f3fa835f2786ad4de7966252") {
  setcookie("login", "Yes");
  header("location:116home.php");
} else {
  header("location:116login.php?invalid=invalid");
}
?>