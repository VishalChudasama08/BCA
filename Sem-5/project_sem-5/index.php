<?php
require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<div class="container-lg">
    <div class="">
        <div class="" style="border-radius: 10px;">
            <div class="">
                <div class="">
                    <div class="">
                        <h3>Theatre Name</h3>
                        <h5>Streaming Time</h5>
                        <h5>Theatre Location</h5>
                    </div>
                </div>
            </div>
            <?php
            include_once("show_movies.php");
            ?>
        </div>
    </div>
</div>
<?php include_once("footer.php") ?>