<?php
require_once("connect.php");
session_start();
if (isset($_SESSION["booked_seats"]) && isset($_SESSION["seats_id"])) {
    $booked_seats = $_SESSION["booked_seats"];
    $booked_seats_array = explode(", ", $booked_seats);
    $booke_seats_number = count($booked_seats_array);

    $last_value = str_replace(" ", "", end($booked_seats_array));
    $booked_seats_array[key($booked_seats_array)] = $last_value;
    // foreach ($booked_seats_array as $new) {
    //     echo "`" . $new . "`<br>";
    // }
    // echo "<br>";

    $seats_id = $_SESSION["seats_id"];
    $seats_query = "SELECT * FROM `seats` WHERE id='" . $seats_id . "';";
    $seats_records = mysqli_query($conn, $seats_query);
    $seats_row = mysqli_fetch_assoc($seats_records);
    $pre_booked_seats_name_array = explode(", ", $seats_row['booked_seats_name']);
    // foreach ($pre_booked_seats_name_array as $new) {
    //     echo "`" . $new . "`<br>";
    // }
    // echo "<br>";


    // find same value and remove and return new array
    $all_booked_seats_name_array = array_diff($pre_booked_seats_name_array, $booked_seats_array);
    // reindex array 
    $all_booked_seats_name_array = array_values($all_booked_seats_name_array);
    // foreach ($all_booked_seats_name_array as $seat) {
    //     echo "`" . $seat . "`<br>";
    // }

    $all_booked_seats_name_string = implode(",", $all_booked_seats_name_array);
    $all_booked_seats_name_string = str_replace(" ", "", $all_booked_seats_name_string);
    $all_booked_seats_name_string = str_replace(",", ", ", $all_booked_seats_name_string);
    $booked_seats_name = $all_booked_seats_name_string;

    $total_seats_number = $seats_row['available_seats'];
    $available_seats = $total_seats_number + $booke_seats_number;

    $seats_query = "UPDATE `seats` SET `available_seats` = " . $available_seats . ", `booked_seats_name` = '" . $booked_seats_name . "' WHERE `seats`.`id` = " . $seats_id . ";";
    mysqli_query($conn, $seats_query);
    header("location:index.php");
}
