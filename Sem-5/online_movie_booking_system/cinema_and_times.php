<?php
require_once("connect.php");

$today = time();
$day1 = strtotime("+1 days", $today);
$day2 = strtotime("+2 days", $today);
$day3 = strtotime("+3 days", $today);

$date = '';
$day = '';
if ($_GET['date'] == date("d", $day1)) {
    $date = '2024-12-18';
    $day = date("d/m/Y", $day1);
} elseif ($_GET['date'] == date("d", $day2)) {
    $date = '2024-12-19';
    $day = date("d/m/Y", $day2);
} elseif ($_GET['date'] == date("d", $day3)) {
    $date = '2024-12-20';
    $day = date("d/m/Y", $day3);
}
$_SESSION['booking_day'] = $day;

$movie_id = $_GET['id'];
$movie_query = "SELECT * FROM `movies` WHERE id='" . $movie_id . "';";
$movie_records  = mysqli_query($conn, $movie_query);
$movie_row = mysqli_fetch_assoc($movie_records);

$cinema_query = "SELECT * FROM `cinema`;";
$cinema_records  = mysqli_query($conn, $cinema_query);
?>

<div class="border border-2 border-info rounded mt-2 pt-1 pb-1">
    <table class="table m-0">
        <tbody>
            <tr>
                <th>Cinema Name</th>
                <th>Language</th>
                <th>Show Times</th>
                <th>Info</th>
            </tr>
            <?php
            while ($cinema_row = mysqli_fetch_assoc($cinema_records)) {
                $times_query = "SELECT * FROM `times` WHERE cinema_id=" . $cinema_row['id'] . " AND show_date='" . $date . "';";
                $times_records  = mysqli_query($conn, $times_query);
            ?>
                <tr>
                    <th>
                        <?= $cinema_row['name']; ?>
                    </th>
                    <td>
                        <?php
                        $languages = $movie_row['language'];
                        $languages_arr = explode(", ", $languages);
                        $random_index = array_rand($languages_arr);
                        $language = $languages_arr[$random_index];
                        echo $language;
                        ?>
                    </td>
                    <td>
                        <?php
                        while ($times_row = mysqli_fetch_assoc($times_records)) {
                            $formatted_time = date('h:i A', strtotime($times_row['show_time']));
                        ?>
                            <button onclick="postIds('seats_layout_and_selection.php', ['movie_id:<?= $movie_id; ?>', 'cinema_id:<?= $cinema_row['id']; ?>', 'times_id:<?= $times_row['id']; ?>'], false)" class="btn btn-outline-warning">
                                <?= $formatted_time; ?>
                            </button>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="#" onclick="loadCinemaInfo(<?= $cinema_row['id']; ?>)">
                            <img src="images/circle-info-solid.svg" alt="information logo" style="margin: 12px;">
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>