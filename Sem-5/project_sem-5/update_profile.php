<?php
require_once("connect.php");
extract($_POST);
$user_id = $_SESSION['user_id'];
// print_r($_POST);
$query = "UPDATE users SET name = '" . $name . "', email = '" . $username . "', mobile_number = " . $mobile_number . " WHERE id = " . $user_id . ";";
if (mysqli_query($conn, $query)) {
    header("location:index.php?profile=update");
    exit();
} else {
    echo mysqli_error($conn);
}
