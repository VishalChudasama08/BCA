<?php
require_once("connect.php");
extract($_POST);
$query = "SELECT * FROM users WHERE email='$username'";
$records = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($records);
echo $row['id'];
echo $row['email'];
echo $row['password'];
// $encrypt = md5($password); //74108520
// if ($username == "okay@gmail.com" && $encrypt == "a49dbc19f3fa835f2786ad4de7966252") {
if ($username == $row['email'] && $password == $row['password']) {
    $_SESSION["login"] = "Yes";
    header("location:index.php");
    exit();
} else {
    header("location:login.php?invalid=invalid");
}
