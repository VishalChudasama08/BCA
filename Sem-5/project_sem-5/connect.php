<?php
session_start();
// echo $directory = str_replace("\\", "/", __DIR__);
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'v4';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
