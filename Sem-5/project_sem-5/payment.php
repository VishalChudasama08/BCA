<?php
require_once("connect.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");

extract($_POST);
// print_r($_POST);
// echo "<br>";
// print_r($_SESSION);

// echo "<br>";
$user_id = $_SESSION['user_id'];
// echo "<br>";
$number_of_seats = count($select_seats);
// echo "<br>";

$keys = [];
foreach ($select_seats as $seat) {
    foreach ($_SESSION['all_alphabet_array'] as $key => $value) {
        if (strpos($value, $seat[0]) !== false) {
            $keys[] .= $key;
        }
    }
}
$select_seats = str_replace(" , ", ", ", implode(", ", $select_seats));
$total_price = 0;
foreach ($keys as $k) {
    $total_price += $_SESSION['total_price'][$k];
}
// echo $total_price;
?>

<body>
    <div class="container">
        <?php
        $booking_query = "INSERT INTO bookings (user_id, movies_id, cinema_id, number_of_seats, total_price) VALUES (" . $user_id . ", " . $movie_id . ", " . $cinema_id . ", " . $number_of_seats . ", " . $total_price . ");";
        if ($_SESSION['booking_query'] == "true") {
            if (mysqli_query($conn, $booking_query)) {
                $_SESSION['booking_query'] = "false";
            }
        }
        ?>
        <button type="button" class="btn btn-primary" onclick="return postIds('ticket_layout.php', ['total_price:<?= $total_price; ?>', 'select_seats:<?= $select_seats; ?>', 'movie_id:<?= $movie_id; ?>', 'cinema_id:<?= $cinema_id; ?>', 'times_id:<?= $times_id; ?>', 'seats_id:<?= $seats_id; ?>'], false)">Pay &#8377;<?= $total_price; ?></button>
        <?php

        ?>
    </div>
</body>

<?php include_once("footer.php"); ?>