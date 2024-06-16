<?php
require_once("connect.php");
include_once("header.php");
extract($_POST);
echo $select_seats;
?>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['seats'])) {
//     $selectedSeats = $_POST['seats'];
//     foreach ($selectedSeats as $seat) {
//         $sql = "UPDATE seats SET booked=1 WHERE seat_number='$seat'";
//         $conn->query($sql);
//     }
//     echo "<p>Booking successful!</p>";
// }

// // Fetch seat data
// $sql = "SELECT seat_number, booked FROM seats";
// $result = $conn->query($sql);
// $seats = [];
// while ($row = $result->fetch_assoc()) {
//     $seats[] = $row;
// }
// $conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Movie Booking</title>
    <style>
        .screen_icon {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .seat {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin: 5px;
            text-align: center;
            line-height: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .available {
            background-color: #90EE90;
        }

        .booked {
            background-color: #FF6347;
        }

        .rows {
            display: flex;
            justify-content: center;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Movie Booking</h1>
    <form method="post" action="">
        <?php
        // $rows = ['A', 'B', 'C', 'D', 'E'];
        // foreach ($rows as $row) {
        //     echo '<div class="rows">';
        //     echo "<p>" . $row . "</p>";
        //     for ($i = 1; $i <= 10; $i++) {
        //         $seatNumber = $row . $i;
        //         $seat = array_filter($seats, function ($s) use ($seatNumber) {
        //             return $s['seat_number'] == $seatNumber;
        //         });
        //         $seat = reset($seat);
        //         $booked = $seat['booked'] ? 'booked' : 'available';
        //         echo '<div class="seat ' . $booked . '">';
        //         echo '<input type="checkbox" name="seats[]" value="' . $seatNumber . '" ' . ($seat['booked'] ? 'disabled' : '') . '>';
        //         echo $seatNumber;
        //         echo '</div>';
        //     }
        //     echo '</div>';
        // }
        ?>
        <br>
        <div class="screen_icon">
            <img src="images/screen-icon.svg" alt="screen-icon">
        </div>
        <div class="rows">
            <div class="seat available">
                <input type="checkbox">
            </div>
            <label style="margin-top: .5rem;">Available Seats</label>
            <div class="seat booked" style="margin-left: 2rem;">
                <input type="checkbox">
            </div>
            <label style="margin-top: .5rem;">Booked Seats</label>
        </div>
        <br>
        <input type="submit" value="Book Selected Seats">
    </form>
</body>
<?php
include_once("footer.php");
?>