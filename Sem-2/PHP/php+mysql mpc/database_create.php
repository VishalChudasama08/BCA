<?php
require "connect.php";

// $main_db = ['information_schema', 'mysql', 'performance_schema', 'phpmyadmin', 'test'];
// if (in_array($_POST['dbname'], $main_db)) {
//     die("Not having permission");
// }

if (isset($_POST['dbname']) && $_POST['submit'] == 'create') {
    $sql = "create database " . $_POST['dbname'] . ";";
    echo "create new database " . $_POST['dbname'] . " Successfully";
    mysqli_query($mysqli, $sql);
}
// if ($_POST['delete'] == 'delete') {
//     $sql = "drop database " . $dbnameone . ";";
//     echo "Delete database " . $dbnameone . " Successfully";
//     mysqli_query($mysqli, $sql);
// }
