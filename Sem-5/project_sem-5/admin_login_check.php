<?php
require_once("connect.php");
extract($_POST);
$query = "SELECT * FROM users WHERE email='$username'";
$records = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($records);

$encrypt = md5($password); //`I Am Admin`
if ($username == 'okay@gmail.com' && $encrypt == "f97db60c120efd65f737b8c2122f13ec") { //`I Am Admin`
    $_SESSION["admin"] = "Yes";
    header("location:dashboard.php");
} else {
    header("location:admin_login.php?invalid=invalid");
}
