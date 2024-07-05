<?php
require_once("connect.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");

extract($_POST);

$keys = [];
foreach ($select_seats as $seat) {
    foreach ($_SESSION['all_alphabet_array'] as $key => $value) {
        if (strpos($value, $seat[0]) !== false) {
            $keys[] .= $key;
        }
    }
}
$total_price = 0;
foreach ($keys as $k) {
    $total_price += $_SESSION['total_price'][$k];
}

$select_seats = str_replace(" , ", ", ", implode(", ", $select_seats));
?>

<body>
    <button type="button" class="btn btn-primary" onclick="return postIds('ticket_layout.php', ['total_price:<?= $total_price; ?>', 'select_seats:<?= $select_seats; ?>', 'movie_id:<?= $movie_id; ?>', 'cinema_id:<?= $cinema_id; ?>', 'times_id:<?= $times_id; ?>', 'seats_id:<?= $seats_id; ?>'], false)">Pay &#8377;<?= $total_price; ?></button>
</body>

<?php include_once("footer.php"); ?>