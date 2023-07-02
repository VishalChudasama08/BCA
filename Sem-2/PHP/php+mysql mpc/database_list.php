<?php
require "connect.php";
$data = mysqli_query($mysqli, "show databases;");
while ($record = mysqli_fetch_row($data)) {
    echo $record[0] . " | ";
}
