<?php
require_once("connect.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");
extract($_POST);
// print_r($_POST);
// $booked_seats_name = str_replace(" , ", ", ", implode(", ", $select_seats)); // this action doing in payment page 
$booked_seats_name = $select_seats;

$booked_seats = $booked_seats_name;

mysqli_query($conn, "DELETE FROM temp");
mysqli_query($conn, "INSERT INTO `temp`(name, value) VALUES ('booked_seats', '" . $booked_seats . "')");
// $_SESSION["booked_seats" . $user_id] = $booked_seats;

// echo "<br>";



$seats_query = "SELECT * FROM `seats` WHERE cinema_id='" . $cinema_id . "';";
$seats_records = mysqli_query($conn, $seats_query);
$seats_row = mysqli_fetch_assoc($seats_records);
$seats_id = $seats_row['id'];

mysqli_query($conn, "INSERT INTO `temp`(name, value) VALUES ('seats_id', '" . $seats_id . "')");
// $_SESSION["seats_id"] = $seats_id;

if ($seats_row['booked_seats_name']) { // existing booked seats
    // Combine booked seats into a single array (using explode and array_merge)
    $booked_seats_name_array = explode(", ", $booked_seats_name);
    $last_value = str_replace(" ", "", end($booked_seats_name_array));
    // echo "last_value = '" . $last_value . "'<br>";
    $booked_seats_name_array[key($booked_seats_name_array)] = $last_value;

    $pre_booked_seats_name_array = explode(", ", $seats_row['booked_seats_name']);

    $all_booked_seats_name_array = array_merge($booked_seats_name_array, $pre_booked_seats_name_array);

    // remove duplicate value in $all_booked_seats_name_array array
    $all_booked_seats_name_array = array_unique($all_booked_seats_name_array);
    // reindex array 
    $all_booked_seats_name_array = array_values($all_booked_seats_name_array);


    // Join the array back into a string with commas
    $all_booked_seats_name_string = implode(",", $all_booked_seats_name_array);
    $all_booked_seats_name_string = str_replace(" ", "", $all_booked_seats_name_string);
    $all_booked_seats_name_string = str_replace(",", ", ", $all_booked_seats_name_string);

    $booked_seats_name = $all_booked_seats_name_string;
    // echo "Combined booked seats: " . $booked_seats_name;
}

$total_seats_number = $seats_row['total_seats'];
$booked_seats_number = count(explode(", ", $booked_seats_name));
$available_seats = $total_seats_number - $booked_seats_number;

$seats_query = "UPDATE `seats` SET `available_seats` = " . $available_seats . ", `booked_seats_name` = '" . $booked_seats_name . "' WHERE `seats`.`id` = " . $seats_id . ";";

// echo "<br>" . $seats_query;

$seats_updated = mysqli_query($conn, $seats_query);

// $movie_id = $_POST['movie_id'];
$movie_query = "SELECT * FROM `movies` WHERE id='" . $movie_id . "';";
$movie_records  = mysqli_query($conn, $movie_query);
$movie_row = mysqli_fetch_assoc($movie_records);

// $cinema_id = $_POST['cinema_id'];
$cinema_query = "SELECT * FROM `cinema` WHERE id=" . $cinema_id . ";";
$cinema_records  = mysqli_query($conn, $cinema_query);
$cinema_row = mysqli_fetch_assoc($cinema_records);

// $times_id = $_POST['times_id'];
$times_query = "SELECT * FROM `times` WHERE id=" . $times_id . ";";
$times_records  = mysqli_query($conn, $times_query);
$times_row = mysqli_fetch_assoc($times_records);
$formatted_time = date('h:i A', strtotime($times_row['show_time']));

?>

<body>
    <div class="container ticket-layout" id="show_movies">
        <?php
        if (mysqli_affected_rows($conn) > 0) {
            echo "<h2>Booking Successful!</h2>";
        }
        ?>

        <p><strong>Movie Title:</strong> <?= $movie_row['title']; ?></p>
        <p><strong>Theater:</strong> <?= $cinema_row['name']; ?></p>
        <p><strong>Location:</strong> <?= $cinema_row['location']; ?></p>
        <p><strong>Show Date:</strong> <?= $_SESSION['booking_day']; ?></p>
        <p><strong>Show Time:</strong> <?= $formatted_time; ?></p>
        <p><strong>Seats:</strong> <?= $booked_seats; ?></p>
        <p><strong>Total Price:</strong> &#8377;<?= $total_price; ?></p>
        <button class="btn btn-danger" onclick="cancel()">Booking Cancellation</button>
    </div>
    <?php
    if (isset($_GET['profile']) && $_GET['profile'] == 'update') {
    ?>
        <script>
            $(document).ready(function() {
                $('#show_movies').hide();
                $('#my_profile').show();
                console.log('okay');
            });
        </script>
    <?php
    }
    ?>
    <div class="overflow-auto" id="my_profile">
        <?php
        include_once("my_profile.php")
        ?>
    </div>
</body>
<script>
    function cancel() {
        let $ok = confirm("Are your sure! You want to cancel booking ?");
        if ($ok) {
            window.location.href = "booking_cancel.php";
        }
    }
</script>

</html>
<?php include_once("footer.php"); ?>