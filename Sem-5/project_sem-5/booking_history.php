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
            <th>Status</th>
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
            $bookings_id = $booking_history_row['id'];
            $bookings_status = $booking_history_row['status'];
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
                <td>
                    <?php
                    $today = time();
                    $now_date_string = date("d/m", $today);
                    $now_day_string = explode(":", explode(" ", $booking_history_row['booking_date'])[1])[0];
                    // echo "<br>";
                    $booking_date_string = explode("/", $booking_date)[0] . "/" . explode("/", $booking_date)[1];
                    $booking_day_string = explode(":", explode(" ", $booking_history_row['booking_date'])[1])[0];

                    if ($booking_date_string == $now_date_string && $booking_day_string == $now_day_string && $bookings_status == 'Booking successful.') {
                        echo '<a href="booking_cancel.php?cancel_this=' . $bookings_id . '" class="btn btn-outline-danger m-0 py-0 px-1">Booking Cancel</a>';
                    } else {
                        if ($bookings_status == 'Booking successful.') {
                            echo '<p style="color:green;">' . $bookings_status . '</p>';
                        } else {
                            echo '<p>' . $bookings_status . '</p>';
                        }
                    }
                    ?>
                </td>
            </tr>
        <?php
            $rows_counter++;
        }
        ?>
    </tbody>
</table>