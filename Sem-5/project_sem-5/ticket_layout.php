<?php
require_once("connect.php");
include_once("header.php");

// if (!isset($_SESSION['booking_id'])) {
//     header("Location: index.php");
//     exit();
// }
// if (!isset($_SESSION['login'])) {
//     header("location:login.php");
//     exit();
// }

// $booking_id = $_SESSION['booking_id'];

// // Fetch booking details
// $query = "SELECT b.id, b.num_tickets, b.total_price, b.booking_date, u.name, u.email, s.show_date, s.show_time, m.title, t.name AS theater_name, t.location AS theater_location 
//           FROM bookings b
//           JOIN users u ON b.user_id = u.id
//           JOIN shows s ON b.show_id = s.id
//           JOIN movies m ON s.movie_id = m.id
//           JOIN screens sc ON s.screen_id = sc.id
//           JOIN theaters t ON sc.theater_id = t.id
//           WHERE b.id = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param("i", $booking_id);
// $stmt->execute();
// $result = $stmt->get_result();
// $booking_details = $result->fetch_assoc();

// // Fetch seat details
// $query = "SELECT seat_number FROM seat_bookings WHERE booking_id = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param("i", $booking_id);
// $stmt->execute();
// $result = $stmt->get_result();
// $seats = [];
// while ($row = $result->fetch_assoc()) {
//     $seats[] = $row['seat_number'];
// }

?>


<?php
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
        <p><strong>Booking ID:</strong> <?php echo htmlspecialchars($booking_details['id']); ?></p>
        <p><strong>Movie Title:</strong> <?php echo htmlspecialchars($booking_details['title']); ?></p>
        <p><strong>Theater:</strong> <?php echo htmlspecialchars($booking_details['theater_name']); ?></p>
        <p><strong>Location:</strong> <?php echo htmlspecialchars($booking_details['theater_location']); ?></p>
        <p><strong>Show Date:</strong> <?php echo htmlspecialchars($booking_details['show_date']); ?></p>
        <p><strong>Show Time:</strong> <?php echo htmlspecialchars($booking_details['show_time']); ?></p>
        <p><strong>Seats:</strong> <?php echo htmlspecialchars(implode(', ', $seats)); ?></p>
        <p><strong>Total Price:</strong> $<?php echo htmlspecialchars(number_format($booking_details['total_price'], 2)); ?></p>
        <p><strong>Booking Date:</strong> <?php echo htmlspecialchars($booking_details['booking_date']); ?></p>
    </div>
</body>

</html>
<?php include_once("footer.php"); ?>