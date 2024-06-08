<?php
require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}

$movie_id = $_GET['id'];
// Fetch shows related to the movie and screen details
$result = $conn->query("SELECT sh.id AS show_id, sh.show_time, sh.show_date, sc.seat_structure, sc.booked_seats 
                        FROM shows sh 
                        JOIN screens sc ON sh.screen_id = sc.id 
                        WHERE sh.movie_id = $movie_id");

$shows = [];
while ($row = $result->fetch_assoc()) {
    $shows[] = $row;
}

if (empty($shows)) {
    echo "<p>No shows available for this movie.</p>";
} else {
    echo "<h2>Select Your Show</h2>";
    echo '<div class="">
                <div class="">
                    <div class="">
                        <h3>Theatre Name</h3>
                        <h5>Streaming Time</h5>
                        <h5>Theatre Location</h5>
                    </div>
                </div>
            </div>';
    echo "<ul>";
    foreach ($shows as $show) {
        echo "<li><a href='seat_selection.php?show_id=" . $show['show_id'] . "'>Show on " . $show['show_date'] . " at " . $show['show_time'] . "</a></li>";
    }
    echo "</ul>";
}
include_once("footer.php");
