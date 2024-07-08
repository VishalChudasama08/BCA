<?php
require_once("connect.php");
if (isset($_GET['v'])) {
    extract($_POST);
    $encrypt = md5($password);
    $query = "INSERT INTO users (name, email, password, mobile_number, security_question, answer) VALUES ('$name', '$email', '$encrypt', '$mobile_number', '$security_question', '$answer');";
    echo $query;
    if (mysqli_query($conn, $query)) {
        header("location:login.php?save=yes");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}
