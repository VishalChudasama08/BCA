<?php
require_once("../connect.php");
print_r($_POST);
$selected_movie = $_POST['selected_movie'];
$result;
foreach ($selected_movie as $key) {
    $result = mysqli_query($conn, "DELETE FROM `movies` WHERE `id` = " . $key . ";");
}
if ($result) {
    $_SESSION['delete'] = "yes";
    header("location:dashboard.php");
    exit();
} else {
    $_SESSION['delete'] = "no";
    header("location:dashboard.php");
    exit();
}
