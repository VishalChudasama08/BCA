<?php
session_start();
unset($_SESSION['admin']);
$file_name = $_SESSION['file_name'];
session_destroy();

// if ()
header("location:admin_login.php");
exit();
