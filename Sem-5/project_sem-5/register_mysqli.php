<?php
require_once("connect.php");
if (isset($_GET['v'])) {
    extract($_POST);
    $query = "INSERT INTO users (name, email, password, mobile_number) VALUES ('$name', '$email', '$password', '$mobile_number');";
    echo $query;
    if (mysqli_query($conn, $query)) {
        header("location:login.php?save=yes");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}
