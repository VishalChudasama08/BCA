<?php
session_start();
extract($_POST);
$encrypt = md5($password); //74108520
if ($email == "okay@gmail.com" && $encrypt == "a49dbc19f3fa835f2786ad4de7966252") {
  $_SESSION("login", "Yes");
  header("location:119home.php");
} else {
  header("location:119login.php?invalid=invalid");
}
?>