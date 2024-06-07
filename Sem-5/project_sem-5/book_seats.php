<?php
session_start();
include 'connect.php'; // Database connection

header('Content-Type: application/json');

if (!isset($_SESSION['login'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}

$input = json_decode(file_get_contents('php://input'), true);
if ($input === null) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid JSON input']);
    exit();
}

$user_id = $_SESSION['login']; // Use session user ID
$show_id = $input['show_id'];
$selected_seats = $input['seats'];
$num_tickets = count($selected_seats);
$total_price = $num_tickets * 10; // Example price calculation

// Debugging: Check if the user ID exists in the users table
$user_check_sql = "SELECT id FROM users WHERE id = ?";
$stmt = $conn->prepare($user_check_sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user_result = $stmt->get_result();

if ($user_result->num_rows === 0) {
    echo json_encode(['status' => 'error', 'message' => 'User ID does not exist']);
    exit();
}

// Begin transaction
$conn->begin_transaction();

try {
    // Insert booking
    $sql = "INSERT INTO bookings (user_id, show_id, num_tickets, total_price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        throw new Exception($conn->error);
    }
    $stmt->bind_param("iiid", $user_id, $show_id, $num_tickets, $total_price);
    $stmt->execute();
    $booking_id = $stmt->insert_id;

    // Insert seat bookings
    foreach ($selected_seats as $seat) {
        $sql = "INSERT INTO seat_bookings (booking_id, seat_number) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            throw new Exception($conn->error);
        }
        $stmt->bind_param("is", $booking_id, $seat);
        $stmt->execute();
    }

    // Update booked seats in screens table
    $booked_seats_str = implode(',', $selected_seats);
    $sql = "UPDATE screens s JOIN shows sh ON s.id = sh.screen_id
            SET s.booked_seats = CONCAT(s.booked_seats, ?, ',')
            WHERE sh.id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        throw new Exception($conn->error);
    }
    $stmt->bind_param("si", $booked_seats_str, $show_id);
    $stmt->execute();

    // Commit transaction
    $conn->commit();

    echo json_encode(['status' => 'success', 'message' => 'Booking successful', 'booking_id' => $booking_id]);
} catch (Exception $e) {
    $conn->rollback();
    echo json_encode(['status' => 'error', 'message' => 'Booking failed', 'error' => $e->getMessage()]);
}
