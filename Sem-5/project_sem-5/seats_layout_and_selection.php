<?php
require_once("connect.php");
include_once("header.php");

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
if (isset($_SESSION['booked_seats'])) {
    // echo $_SESSION['booked_seats'];
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

        .space,
        .number {
            display: inline;
            font-size: 18px;
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
            padding-left: 23px;
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
            padding-left: 23px;
            position: relative;
        }

        .custom-checkbox1 .checkmark1 {
            position: absolute;
            top: -15px;
            left: 0;
            height: 20px;
            width: 23px;
        }
    </style>
</head>
<?php
print_r($_POST);
$movie_id = $_POST['movie_id'];
$movie_query = "SELECT * FROM `movies` WHERE id='" . $movie_id . "';";
$movie_records  = mysqli_query($conn, $movie_query);
$movie_row = mysqli_fetch_assoc($movie_records);

$cinema_id = $_POST['cinema_id'];
$cinema_query = "SELECT * FROM `cinema` WHERE id=" . $cinema_id . ";";
$cinema_records  = mysqli_query($conn, $cinema_query);
$cinema_row = mysqli_fetch_assoc($cinema_records);

$times_id = $_POST['times_id'];
$times_query = "SELECT * FROM `times` WHERE id=" . $times_id . ";";
$times_records = mysqli_query($conn, $times_query);
$times_row = mysqli_fetch_assoc($times_records);
$formatted_time = date('h:i A', strtotime($times_row['show_time']));

$seats_id = '2';
$seats_query = "SELECT * FROM `seats` WHERE id=" . $seats_id . ";";
$seats_records = mysqli_query($conn, $seats_query);
$seats_row = mysqli_fetch_assoc($seats_records);
// $_SESSION['seats_id'] = $seats_id; // ser this because on button onclick="postIds()... not set seats_id in post method, i not undustend this why not set, on postIds() function ids variable not present seats_id:2, why not present i not found this bug

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


// $level = ['Silver : 100', 'Gold : 150', 'Platinum : 300'];
// $price = [100, 150, 200];
// $_SESSION["price"] = $price[substr($row[0], 0, 1)];

$level = ['Silver :', 'Gold :', 'Platinum :'];

$movie_price = $movie_row['movie_price'];

$price_level = explode(",", $cinema_row['price_level']);
$total_price;
$n = 0;
foreach ($price_level as $p) {
    $total_price[$n] = $movie_price + (int)$p;
    $n++;
}
print_r($total_price);
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
                <form id="existingForm" action="payment.php" method="post" onsubmit="return validateCheckboxes('payment.php', ['movie_id:<?= $movie_id; ?>', 'cinema_id:<?= $cinema_row['id']; ?>', 'times_id:<?= $times_row['id']; ?>', 'seats_id:<?= $seats_id; ?>'], true)">
                    <div class="screen_icon">
                        <img src="images/screen-icon-180.svg" class="img-fluid" style="transform: rotate(180deg)" alt="screen-icon">
                    </div>
                    <?php
                    $i = 0;
                    $all_alphabet_array = [];
                    $all_alphabet_string = '';
                    foreach ($seats_array as $row) {
                        $alphabet = substr($row[0], 0, 1);
                        $all_alphabet_string .= $alphabet;
                        if (array_key_exists($alphabet, $level)) {
                            // this line add levels
                            echo '<p style="margin: 1px auto;"> ' . $level[$alphabet] . ' ' . $total_price[$i] . ' </p>';
                            $all_alphabet_string = '';
                            $i++;
                            continue;
                        } else {
                            echo '<span><pre class="space">' . $alphabet . '</pre></span>';
                            $all_alphabet_array[$i - 1] = $all_alphabet_string;
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
                                <span class="checkmark1" style="background-color: #F7FFE5;">
                                    <pre class="number"><?= $i; ?></pre>
                                </span>
                            </span>
                        <?php
                            $i++;
                        }
                        $_SESSION['total_price'] = $total_price;
                        $_SESSION['all_alphabet_array'] = $all_alphabet_array;
                        ?>
                    </div>
                    <button class="btn btn-primary mt-5" type="submit" type="button" style="width: 50%;">Booking</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function validateCheckboxes(file, ids, formexist) {
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
        } else {
            postIds(file, ids, formexist);
        }

        return true; // Allow form submission
    }
</script>
<?php include_once("footer.php"); ?>