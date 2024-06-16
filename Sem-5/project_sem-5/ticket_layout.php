<?php
require_once("connect.php");
include_once("header.php");
extract($_POST);
$booked_seats = count($select_seats);
echo $booked_seats_name = str_replace(" , ", ", ", implode(", ", $select_seats));

// Flag file path
$flag_file = "seats_updated.txt";
$seats_updated_flag = false;

$seats_id = $_GET['seats_id'];
$seats_query = "SELECT * FROM `seats` WHERE id='" . $seats_id . "';";
$seats_records = mysqli_query($conn, $seats_query);
$seats_row = mysqli_fetch_assoc($seats_records);
if ($seats_row['booked_seats_name']) {
    $seats_row['booked_seats_name']; // existing booked seats

    // Combine booked seats into a single array (using explode and array_merge)
    $booked_seats_name_array = explode(", ", $booked_seats_name);
    $pre_booked_seats_name_array = explode(", ", $seats_row['booked_seats_name']);
    $all_booked_seats_name_array = array_merge($booked_seats_name_array, $pre_booked_seats_name_array);

    // Remove duplicate entries (optional)
    $all_booked_seats_name_array = array_unique($all_booked_seats_name_array);

    // Join the array back into a string with commas
    $all_booked_seats_name_string = implode(",", $all_booked_seats_name_array);
    $all_booked_seats_name_string = str_replace(" ", "", $all_booked_seats_name_string);
    $all_booked_seats_name_string = str_replace(",", ", ", $all_booked_seats_name_string);

    echo "Combined booked seats: " . $all_booked_seats_name_string;
}
if (!file_exists($flag_file)) {
    $available_seats = $seats_row['available_seats'] - $booked_seats;
    $seats_query = "UPDATE `seats` SET `available_seats` = " . $available_seats . ", `booked_seats_name` = '" . $all_booked_seats_name_string . "' WHERE `seats`.`id` = " . $seats_id . ";";
    $seats_updated = mysqli_query($conn, $seats_query);
    if ($seats_updated) {
        if (mysqli_affected_rows($conn) > 0) {
            $seats_updated_flag = true;  // Set flag if update successful
            echo "Seat updated successfully!";

            // Create the flag file (ideally with proper permissions)
            file_put_contents($flag_file, "");  // Empty content acts as a flag
        } else {
            echo "No seat updated (might be non-existent ID).";
        }
    } else {
        echo "Error updating seat: " . mysqli_error($conn);
    }
} else {
    // Query has already run, so don't run it again
    echo "Seat update skipped (already performed).";
}

$movie_id = $_GET['movie_id'];
$movie_query = "SELECT * FROM `movies` WHERE id='" . $movie_id . "';";
$movie_records  = mysqli_query($conn, $movie_query);
$movie_row = mysqli_fetch_assoc($movie_records);

$cinema_id = $_GET['cinema_id'];
$cinema_query = "SELECT * FROM `cinema` WHERE id=" . $cinema_id . ";";
$cinema_records  = mysqli_query($conn, $cinema_query);
$cinema_row = mysqli_fetch_assoc($cinema_records);

$times_id = $_GET['times_id'];
$times_query = "SELECT * FROM `times` WHERE id=" . $times_id . ";";
$times_records  = mysqli_query($conn, $times_query);
$times_row = mysqli_fetch_assoc($times_records);
$formatted_time = date('h:i A', strtotime($times_row['show_time']));
?>


<!DOCTYPE html>
<html>

<head>
    <title>Ticket Layout</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="ticket-layout">
        <h1>Booking Successful!</h1>
        <p><strong>Booking ID:</strong> </p>
        <p><strong>Movie Title:</strong> </p>
        <p><strong>Theater:</strong> </p>
        <p><strong>Location:</strong> </p>
        <p><strong>Show Date:</strong> </p>
        <p><strong>Show Time:</strong> </p>
        <p><strong>Seats:</strong> </p>
        <p><strong>Total Price:</strong> &#8377;</p>
        <p><strong>Booking Date:</strong> </p>
    </div>
</body>

</html>
<?php include_once("footer.php"); ?>