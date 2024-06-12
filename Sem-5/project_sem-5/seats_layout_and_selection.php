<?php

require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .space {
            padding-bottom: 50px;
        }

        /* Hide the default checkbox */
        .custom-checkbox input[type="checkbox"] {
            display: none;
        }

        /* Create a custom checkmark */
        .custom-checkbox {
            display: inline-block;
            cursor: pointer;
            user-select: none;
            padding-left: 25px;
            position: relative;
            font-size: 18px;
        }

        /* Create the checkmark/indicator (hidden by default) */
        .custom-checkbox .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #ccc;
            border-radius: 4px;
        }

        /* When the checkbox is checked, add a blue background */
        .custom-checkbox input:checked+.checkmark {
            background-color: #2196F3;
        }

        /* Add some animation to the checkmark */
        .custom-checkbox .checkmark {
            transition: background-color 0.2s ease;
        }
    </style>
</head>
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
$times_records = mysqli_query($conn, $times_query);
$times_row = mysqli_fetch_assoc($times_records);
$formatted_time = date('h:i A', strtotime($times_row['show_time']));

$seats_query = "SELECT * FROM `seats` WHERE id=1;";
$seats_records = mysqli_query($conn, $seats_query);
$seats_row = mysqli_fetch_assoc($seats_records);

$seats_string = $seats_row['seat_structure'];
$json_string = str_replace("'", '"', $seats_string);
$seats_array = json_decode($json_string, true);
?>

<body>
    <h2>Select Your Seats</h2>
    <form action="ticket_layout.php?cinema_id=<?= $cinema_id; ?>&amp;times_id=<?= $times_id; ?>&amp;movie_id=<?= $movie_id; ?>" method="post">
        <?php
        foreach ($seats_array as $row) {
            echo '<span class="space">' . substr($row[0], 0, 1) . '</span>';
            foreach ($row as $seats_array) {
        ?>

                <label class="custom-checkbox">
                    <input type="checkbox" id="checkbox" value='<?php echo $seats_array . " "; ?>' />
                    <span class="checkmark"></span>

                </label>
        <?php
            }
            echo "<br><hr>";
        }
        ?>

        <button type="submit">Book Seats</button>
    </form>

    <?php include_once("footer.php"); ?>