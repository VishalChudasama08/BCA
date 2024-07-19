<?php
require_once("connect.php");
$booked_seats = " ";
$seats_id = " ";
$booking_id = " ";
if (isset($_GET["cancel_this"])) {
    $booking_id = $_GET['cancel_this'];
    mysqli_query($conn, "UPDATE `bookings` SET `status` = 'Booking canceled.' WHERE `bookings`.`id` = " . $booking_id . ";");
    $booking_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `bookings` WHERE id=" . $_GET['cancel_this'] . ";"));
    echo $booked_seats = $booking_row['booked_seats_name'];
    echo $cinema_name = $booking_row['cinema_name'];
    $cinema_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `cinema` WHERE name='" . $cinema_name . "';"));
    $seats_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `seats` WHERE cinema_id=" . $cinema_row['id'] . ";"));
    $seats_id = $seats_row['id'];
} else {
    $temp_row1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `temp` WHERE name='booked_seats';"));
    echo $booked_seats = $temp_row1['value'];

    $temp_row2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `temp` WHERE name='seats_id';"));
    $seats_id = $temp_row2['value'];
}
if (isset($booked_seats)) {
    $booked_seats_array = explode(", ", $booked_seats);
    echo "<br>";
    echo $booked_seats_number = count($booked_seats_array);

    $last_value = str_replace(" ", "", end($booked_seats_array));
    $booked_seats_array[key($booked_seats_array)] = $last_value;
    // foreach ($booked_seats_array as $new) {
    //     echo "`" . $new . "`<br>";
    // }
    // echo "<br>";

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

    echo "<br>";
    echo $total_seats_number = $seats_row['available_seats'];
    echo "<br>";
    echo $available_seats = $total_seats_number + $booked_seats_number;
    echo "<br>";

    echo $seats_query = "UPDATE `seats` SET `available_seats` = " . $available_seats . ", `booked_seats_name` = '" . $booked_seats_name . "' WHERE `seats`.`id` = " . $seats_id . ";";
    mysqli_query($conn, $seats_query);
    header("location:index.php?booking_cancel=yes");
}
