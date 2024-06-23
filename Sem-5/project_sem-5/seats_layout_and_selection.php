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
        form {
            text-align: center;
            min-width: 800px;
        }

        .screen_icon {
            width: 30%;
            min-width: 300px;
            margin: 20px auto;
        }

        /* .space { */
        /* margin: 15px; */
        /* } */

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
            /* font-size: 18px; */
        }

        /* Create the checkmark/indicator (hidden by default) */
        .custom-checkbox .checkmark {
            position: absolute;
            top: -15px;
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

        .count {
            padding-left: 12px;
        }

        .custom-checkbox1 {
            display: inline-block;
            padding-left: 25px;
            position: relative;
        }

        .custom-checkbox1 .checkmark1 {
            position: absolute;
            top: -15px;
            left: 0;
            height: 20px;
            width: 20px;
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

$seats_id = '1';
$seats_query = "SELECT * FROM `seats` WHERE id=" . $seats_id . ";";
$seats_records = mysqli_query($conn, $seats_query);
$seats_row = mysqli_fetch_assoc($seats_records);

$seats_string = $seats_row['seat_structure'];
$json_string = str_replace("'", '"', $seats_string);
$seats_array = json_decode($json_string, true);
$k = count($seats_array[1]);

$no_seats_string = $seats_row['no_seat'];
$no_seats_string = str_replace('[', '', $no_seats_string);
$no_seats_string = str_replace(']', '', $no_seats_string);
echo $no_seats_string = str_replace('\'', '', $no_seats_string);
$no_seats_array = explode(", ", $no_seats_string);
// echo "<pre>";
// print_r($no_seats_array);
// echo "</pre>";
echo "<br>";

echo $booked_seats_name = $seats_row['booked_seats_name'];
$booked_seats_name = explode(", ", $booked_seats_name);


$level = ['Silver : 100', 'Gold : 150', 'Platimun : 300'];
$price = [100, 150, 200];
// $_SESSION["price"] = $price[substr($row[0], 0, 1)];
?>

<body>
    <div class="container">
        <h2>Select Your Seats</h2>
        <div style="display: flex;text-align: center;justify-content: center;">
            <div>
                <label class="custom-checkbox" style="margin-top: .5rem;">
                    <span class="checkmark" style="cursor: default;"></span>
                </label>
            </div>
            <div>Available Seats</div>
            <div style="margin-left: 2rem;">
                <label class="custom-checkbox" style="margin-top: .5rem;">
                    <span class="checkmark" style="background-color: #f1c40f;cursor: default;"></span>
                </label>
            </div>
            <div>Booked Seats</div>
        </div>
        <div class="row">
            <div class="col-12 overflow-auto">
                <form id="form" action="ticket_layout.php?cinema_id=<?= $cinema_id; ?>&amp;times_id=<?= $times_id; ?>&amp;movie_id=<?= $movie_id; ?>&amp;seats_id=<?= $seats_id; ?>" method="post" onsubmit="return validateCheckboxes()">
                    <div class="screen_icon">
                        <img src="images/screen-icon-180.svg" class="img-fluid" style="transform: rotate(180deg)" alt="screen-icon">
                    </div>
                    <?php
                    foreach ($seats_array as $row) {
                        if (array_key_exists(substr($row[0], 0, 1), $level)) {
                            // if (substr($row[0], 0, 1) == 0 || substr($row[0], 0, 1) == 1 || substr($row[0], 0, 1) == 2) {
                            // add in database seat_structure field 
                            echo '<p style="margin: 1px auto;"> ' . $level[substr($row[0], 0, 1)] . ' </p>';
                            continue;
                        } else {
                            echo '<span class="space">' . substr($row[0], 0, 1) . '</span>';
                        }
                        foreach ($row as $seats_array) {
                            if (in_array($seats_array, $no_seats_array)) {
                    ?>
                                <span class="custom-checkbox" style="opacity: 0;"></span>
                                <?php
                            } else {
                                if (in_array($seats_array, $booked_seats_name)) {
                                ?>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" id="checkbox" />
                                        <span class="checkmark" style="background-color: #f1c40f;cursor: default;"></span>
                                    </label>
                                <?php
                                } else {
                                ?>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" id="checkbox" name="select_seats[]" value='<?php echo $seats_array . " "; ?>' />
                                        <span class="checkmark"></span>
                                    </label>
                    <?php
                                }
                            }
                        }
                        echo "<br>";
                    }
                    ?>
                    <div class="count">
                        <?php
                        $i = 1;
                        while ($k >= $i) {
                        ?>
                            <span class="custom-checkbox1">
                                <span class="checkmark1" style="background-color: #F7FFE5;"><?= $i; ?></span>
                            </span>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <button class="btn btn-primary mt-5" type="submit" style="width: 50%;">Booking</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function validateCheckboxes() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');

        let isChecked = false;
        for (const checkbox of checkboxes) {
            if (checkbox.checked) {
                isChecked = true;
                break;
            }
        }

        if (!isChecked) {
            alert("Please select at least one seat.");
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>
<?php include_once("footer.php"); ?>