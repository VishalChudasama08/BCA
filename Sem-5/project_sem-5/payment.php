<?php
require_once("connect.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");

extract($_POST);
print_r($_POST);
// echo "<br>";
// print_r($_SESSION);

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

$user_id = $_SESSION['user_id'];
$users_query = "SELECT * FROM `users` WHERE id=" . $user_id . ";";
$user_row = mysqli_fetch_assoc(mysqli_query($conn, $users_query));
$user_name = $user_row['name'];

$movie_query = "SELECT * FROM `movies` WHERE id='" . $movie_id . "';";
$movie_records  = mysqli_query($conn, $movie_query);
$movie_row = mysqli_fetch_assoc($movie_records);
$movie_title = $movie_row['title'];

// $cinema_id = $_POST['cinema_id'];
$cinema_query = "SELECT * FROM `cinema` WHERE id=" . $cinema_id . ";";
$cinema_records  = mysqli_query($conn, $cinema_query);
$cinema_row = mysqli_fetch_assoc($cinema_records);
$cinema_name = $cinema_row['name'];

// save booking records 
$booking_query = "INSERT INTO bookings (user_name, movies_title, cinema_name, number_of_seats, total_price) VALUES ('" . $user_name . "', '" . $movie_title . "', '" . $cinema_name . "', " . $number_of_seats . ", " . $total_price . ");";
if ($_SESSION['booking_query'] == "true") {
    if (mysqli_query($conn, $booking_query)) {
        $_SESSION['booking_query'] = "false";
    }
}
?>

<body>
    <div class="container border border-2 border-info rounded" id="show_movies">
        <div class="row text-center">
            <div class="col-2 border-2 border-info border-bottom">
                <h5 class="pt-2">Payment Methods</h5>
            </div>
            <div class="col border-2 border-info border-start border-bottom">
                <h5 class="pt-2">Payment Information</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2 p-0 text-center">
                <div class="border-2 border-info border-bottom" id="card-div">
                    <button class="my-1 px-5 btn btn-light" id="card">Card</button>
                </div>
                <div class="border-2 border-info border-bottom" id="upi-div">
                    <button class="my-1 px-5 btn btn-light" id="upi">UPI</button>
                </div>
            </div>
            <div class="col-3 p-0 text-center border-2 border-info border-start"></div>
            <div class="col pt-4 pb-2 m-0">
                <div id="show_card">
                    <div class="row row-cols-lg-auto g-3">
                        <div>
                            <label for="username_number" class="form-label">Enter Card Number:</label>
                        </div>
                        <div style="margin-top: 12px;">
                            <input type="number" class="form-control" id="username_number" name="username_number" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="expiry-date">Expiry Date: </label>
                        <select name="month" class="p-1 border border-2 rounded">
                            <option disabled selected hidden>select month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select name="year" class="p-1 border border-2 rounded">
                            <option disabled selected hidden>select year</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                        </select>
                    </div>
                    <div class="row row-cols-lg-auto g-3 mt-1">
                        <div>
                            <label for="cvv">CVV:</label>
                        </div>
                        <div style="margin-top: 10px;">
                            <input type="number" class="form-control" id="cvv" placeholder="XXX" required>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="return postIds('ticket_layout.php', ['total_price:<?= $total_price; ?>', 'select_seats:<?= $select_seats; ?>', 'movie_id:<?= $movie_id; ?>', 'cinema_id:<?= $cinema_id; ?>', 'times_id:<?= $times_id; ?>'], false)">Pay &#8377;<?= $total_price; ?></button>
                </div>
                <div id="show_upi">
                    <div id="show_qr">
                        <img src="images/qr_code.png" alt="qr-code" style="width: 250px;margin:1rem;" />
                    </div>
                    <p class="ms-3">Scan to pay with any UPI app</p>
                    <button type="button" class="btn btn-primary ms-3" onclick="return postIds('ticket_layout.php', ['total_price:<?= $total_price; ?>', 'select_seats:<?= $select_seats; ?>', 'movie_id:<?= $movie_id; ?>', 'cinema_id:<?= $cinema_id; ?>', 'times_id:<?= $times_id; ?>', false)">Pay &#8377;<?= $total_price; ?></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#show_upi').hide()
            $('#show_card').show()
            $('#card').click(function() {
                $('#show_upi').hide()
                $('#show_card').show()
            });
            $('#upi').click(function() {
                $('#show_card').hide()
                $('#show_upi').show()
            });
        });
    </script>
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

<?php include_once("footer.php"); ?>