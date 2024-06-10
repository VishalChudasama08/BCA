<?php
require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
$movie_id = $_GET['id'];
?>
<style>
    #a {
        display: flex;
        flex-flow: row;
    }
</style>
<div class="container">
    <div style="display: flex; flex-flow: row;">
        <h3 class="m-2">Select Date : </h3>
        <a href="#" onclick="loadDoc('cinema_and_times.php?id=<?= $movie_id; ?>&date=18')" type="button" class="btn btn-outline-info m-2">18 Dec</a>
        <a href="#" onclick="loadDoc('cinema_and_times.php?id=<?= $movie_id; ?>&date=19')" type="button" class="btn btn-outline-info m-2">19 Dec</a>
        <a href="#" onclick="loadDoc('cinema_and_times.php?id=<?= $movie_id; ?>&date=20')" type="button" class="btn btn-outline-info m-2">20 Dec</a>
    </div>
    <div id="new"></div>
</div>
<script>
    function loadDoc(page) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", page);
        xhttp.send();
    }
</script>

<?php include_once("footer.php"); ?>