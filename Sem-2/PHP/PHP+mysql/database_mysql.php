<?php
require "connect.php";
if(isset($_POST['submit'])){
	$main_db = ['information_schema', 'mysql', 'performance_schema', 'phpmyadmin', 'test'];
	if (in_array($_POST['dbname'], $main_db)) {
		die("Not having permission");
	}
	if (isset($_POST['dbname']) && $_POST['conctrol'] == 'create') {
		$sql = "create database " . $_POST['dbname'] . ";";
		echo "create new database " . $_POST['dbname'] . " Successfully";
	}
	if (isset($_POST['dbname']) && $_POST['conctrol'] == 'delete') {
		$sql = "drop database " . $_POST['dbname'] . ";";
		echo "Delete database " . $_POST['dbname'] . " Successfully";
	}
	mysqli_query($mysqli, $sql);
}
