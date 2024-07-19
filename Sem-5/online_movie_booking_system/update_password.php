<?php
require_once("connect.php");
$user_id = $_SESSION['forgot_p_use'];
// print_r($_POST);
extract($_POST);
$encrypt = md5($password);
$query = "UPDATE users SET email = '" . $username . "', password = '" . $encrypt . "' WHERE id = " . $user_id . ";";
if (mysqli_query($conn, $query)) {
    header("location:login.php?pass=update");
    exit();
} else {
    echo mysqli_error($conn);
}
