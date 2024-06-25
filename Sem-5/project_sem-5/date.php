<?php
require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
$movie_id = $_POST['movie_id'];

$today = time();

$day1 = strtotime("+1 day", $today);
$day2 = strtotime("+2 days", $today);
$day3 = strtotime("+3 days", $today);

?>
<style>
    /* #a {
        display: flex;
        flex-flow: row;
    } */

    .modal {
        position: fixed;
        top: 50%;
        right: 50%;
    }

    .cinema-info-modal {
        max-width: 800px;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 30px;
        font-weight: bold;
        margin-top: -12px;
        padding: 0px;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div class="container">
    <div style="display: flex; flex-flow: row;">
        <h3 class="m-2">Select Date : </h3>
        <button id="autoclick" onclick="loadCinemas('cinema_and_times.php?id=<?= $movie_id; ?>&date=18')" type="button" class="btn btn-outline-info m-2 buttons"><?= date("d M", $day1); ?></button>

        <button onclick="loadCinemas('cinema_and_times.php?id=<?= $movie_id; ?>&date=19')" type="button" class="btn btn-outline-info m-2 buttons"><?= date("d M", $day2); ?></button>

        <button onclick="loadCinemas('cinema_and_times.php?id=<?= $movie_id; ?>&date=20')" type="button" class="btn btn-outline-info m-2 buttons"><?= date("d M", $day3); ?></button>
    </div>
    <div id="cinema_times_content"></div>
    <div id="cinema-info-modal" class="modal">
        <div class="cinema-info-modal">
            <div id="cinema-info"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        //autoclick and add css
        $('#autoclick').click().css('background-color', '#0dcaf0').css('color', 'black');
        $('.buttons').click(function() {
            // Remove background color from all buttons
            $('button').css('background-color', '').css('color', '');
            // Add background color to the clicked button
            $(this).css('background-color', '#0dcaf0').css('color', 'black');
        });
    });

    function loadCinemas(page) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cinema_times_content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", page);
        xhttp.send();
    }

    function loadCinemaInfo(cinema_id) {
        $.get('cinema_info.php?cinema_id=' + cinema_id, function(data) {
            $('#cinema-info').html(data);
            $('#cinema-info-modal').show();
        });
    }

    $(document).ready(function() {
        $(window).click(function(event) {
            if (event.target.id === 'cinema-info-modal') {
                $('#cinema-info-modal').hide();
            }
        });
    });
</script>

<?php include_once("footer.php"); ?>