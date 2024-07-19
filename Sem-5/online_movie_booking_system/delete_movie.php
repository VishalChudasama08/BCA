<?php
require_once("connect.php");
print_r($_POST);
$selected_movie = $_POST['selected_movie'];
$result;
foreach ($selected_movie as $key) {
    $result = mysqli_query($conn, "DELETE FROM `movies` WHERE `id` = " . $key . ";");
}
if ($result) {
    header("location:dashboard.php?delete=yes");
    exit();
} else {
    header("location:dashboard.php?delete=no");
    exit();
}
