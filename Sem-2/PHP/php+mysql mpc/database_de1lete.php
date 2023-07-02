<?php
require "connect.php";

// $main_db = ['information_schema', 'mysql', 'performance_schema', 'phpmyadmin', 'test'];
// if (in_array($_POST['dbname'], $main_db)) {
//     die("Not having permission");
// }
if (isset($_POST['delete'])) {
   $dbnameone = $_POST['dbname'];
   $sql = "drop database " . $dbnameone . ";";
   mysqli_query($mysqli, $sql);
   echo "Delete database " . $dbnameone . " Successfully";
   header("Location: index_8.php"); // redirect to index_8.php
    exit();
}
?>