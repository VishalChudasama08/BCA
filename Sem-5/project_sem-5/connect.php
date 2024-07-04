<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'v2';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
