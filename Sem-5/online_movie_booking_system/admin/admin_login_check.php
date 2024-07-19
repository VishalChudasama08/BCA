<?php
require_once("../connect.php");
extract($_POST);
$query = "SELECT * FROM `admin` WHERE email='$username'";
$records = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($records);

$_SESSION['admin_id'] = $row['id'];

$encrypt = md5($password); //`I Am Admin`
if ($username == $row['email']  && $encrypt == $row['password']) { //`I Am Admin`
    $_SESSION["admin"] = "Yes";
    header("location:dashboard.php");
} else {
    header("location:admin_login.php?invalid=invalid");
}
