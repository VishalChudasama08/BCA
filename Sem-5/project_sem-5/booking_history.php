<?php
require_once("connect.php");

$booking_history_query;
$booking_history_records;
if (array_key_exists('user_id', $_SESSION)) {
    $user_id = $_SESSION['user_id'];
    $users_query = "SELECT * FROM `users` WHERE id=" . $user_id . ";";
    $user_row = mysqli_fetch_assoc(mysqli_query($conn, $users_query));

    $booking_history_query = "SELECT * FROM bookings WHERE user_name = '" . $user_row['name'] . "';";
    $booking_history_records = mysqli_query($conn, $booking_history_query);
} else {
    $booking_history_query = "SELECT * FROM bookings;";
    $booking_history_records = mysqli_query($conn, $booking_history_query);
}
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>User Name</th>
            <th>Movie Name</th>
            <th>Cinema Name</th>
            <th>Booked Seats</th>
            <th>Price</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $rows_counter = 1;
        while ($booking_history_row = mysqli_fetch_assoc($booking_history_records)) {
            $user_name = $booking_history_row['user_name'];
            $movies_title = $booking_history_row['movies_title'];
            $cinema_name = $booking_history_row['cinema_name'];
            $booked_seats = $booking_history_row['number_of_seats'];
            $price = $booking_history_row['total_price'];
            // Date formatting
            $booking_date = implode("/", array_reverse(explode("-", explode(" ", $booking_history_row['booking_date'])[0])));

        ?>
            <tr>
                <th scope="row"><?= $rows_counter ?></th>
                <td><?= $user_name ?></td>
                <td><?= $movies_title ?></td>
                <td><?= $cinema_name ?></td>
                <td><?= $booked_seats ?></td>
                <td><?= $price ?></td>
                <td><?= $booking_date ?></td>
            </tr>
        <?php
            $rows_counter++;
        }
        ?>
    </tbody>
</table>