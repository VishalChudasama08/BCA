<?php
require_once("../connect.php");
extract($_POST);
$admin_id = $_SESSION['admin_id'];
// print_r($_POST);
$query = "UPDATE `admin` SET name = '" . $name . "', email = '" . $username . "', mobile_number = " . $mobile_number . " WHERE id = " . $admin_id . ";";
if (mysqli_query($conn, $query)) {
    header("location:dashboard.php?profile=update");
    exit();
} else {
    echo mysqli_error($conn);
}
