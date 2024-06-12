<?php
require_once("connect.php");

$date = '';
if ($_GET['date'] == '18') {
    $date = '2024-12-18';
} elseif ($_GET['date'] == '19') {
    $date = '2024-12-19';
} elseif ($_GET['date'] == '20') {
    $date = '2024-12-20';
}
$movie_id = $_GET['id'];
$movie_query = "SELECT * FROM `movies` WHERE id='" . $movie_id . "';";
$movie_records  = mysqli_query($conn, $movie_query);
$movie_row = mysqli_fetch_assoc($movie_records);

$cinema_query = "SELECT * FROM `cinema`;";
$cinema_records  = mysqli_query($conn, $cinema_query);
?>

<div class="container">
    <table class="table">
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
                            <a href="seats_layout_and_selection.php?cinema_id=<?= $cinema_row['id']; ?>&amp;times_id=<?= $times_row['id']; ?>&amp;movie_id=<?= $movie_id; ?>" class="btn btn-outline-warning">
                                <?= $formatted_time; ?>
                            </a>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="#" onclick="loadCinemaInfo(<?= $cinema_row['id']; ?>)">info</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>