<?php
session_start();
unset($_SESSION['admin']);
$file_name = $_SESSION['file_name'];
session_destroy();

// if ()
header("location:../index.php");
exit();
