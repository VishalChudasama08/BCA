<?php
include_once("connect.php"); // Include your database connection

$show_id = $_GET['show_id']; // Get the show ID from the request

// Fetch seat data for the show
$sql = "SELECT seat_structure, booked_seats FROM screens s
        JOIN shows sh ON s.id = sh.screen_id
        WHERE sh.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $show_id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

$seat_structure = $data['seat_structure'];
$booked_seats = explode(',', $data['booked_seats']);

echo json_encode([
    'seat_structure' => explode(',', $seat_structure),
    'booked_seats' => $booked_seats
]);
