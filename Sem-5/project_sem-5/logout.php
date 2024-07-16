<?php
session_start();
unset($_SESSION['login']);
if (isset($_SESSION["logoutfornew"])) {
    session_destroy();
    header("location:register.php");
    exit();
} else {
    session_destroy();
    header("location:index.php");
    exit();
}
