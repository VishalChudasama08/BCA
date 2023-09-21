<?php
session_start();
$dbname = "classicmodels";
$mysqli = mysqli_connect("localhost", "root", "", $dbname) or die(mysqli_connect_error());
