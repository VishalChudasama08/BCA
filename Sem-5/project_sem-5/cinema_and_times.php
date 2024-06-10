<?php
require_once("connect.php");
// print_r($_GET);
$date = '';
if ($_GET['date'] == '18') {
    $date = '2024-12-18';
} elseif ($_GET['date'] == '19') {
    $date = '2024-12-19';
} elseif ($_GET['date'] == '20') {
    $date = '2024-12-20';
}
// echo $date;
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
                <th></th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            while ($cinema_row = mysqli_fetch_assoc($cinema_records)) {
                $times_query = "SELECT * FROM `times` WHERE cinema_id=" . $cinema_row['id'] . " AND show_date='" . $date . "';";
                $times_records  = mysqli_query($conn, $times_query);
                // $times_row = mysqli_fetch_assoc($times_records);
                // print_r($times_row);
            ?>
                <tr>
                    <th scope="row">
                        <span><?= $cinema_row['name']; ?></span>
                        <p class="m-0" style="font-weight: normal;">
                            <span>Language:
                                <?php
                                $languages = $movie_row['language'];
                                $languages_arr = explode(", ", $languages);
                                $random_index = array_rand($languages_arr);
                                $language = $languages_arr[$random_index];
                                echo $language;
                                ?>
                            </span>
                            <span>
                                <a href="#">info</a>
                                <script>
                                    function loadDoc(s) {
                                        const xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                // Open a new popup window
                                                var popup = window.open("", "Popup", "width=600,height=400");
                                                // Write the response data into the new window
                                                popup.document.write(this.responseText);
                                            }
                                        };
                                        xhttp.open("GET", "customer.php?str=" + s + "");
                                        xhttp.send();
                                    }
                                </script>
                            </span>
                        </p>
                    </th>
                    <?php
                    while ($times_row = mysqli_fetch_assoc($times_records)) {
                    ?>
                        <td>
                            <a href="seats_layout_and_selection.php?cinema_id=<?= $cinema_row['id']; ?>&amp;times_id=<?= $times_row['id']; ?>&amp;movie_id=<?= $movie_id; ?>" type="button" class="btn btn-outline-warning">
                                <?php
                                $formatted_time = date('h:i A', strtotime($times_row['show_time']));
                                echo $formatted_time;
                                ?>
                            </a>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>