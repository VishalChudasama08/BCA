<?php
require_once("connect.php");
// echo $encrypt = md5("I Am Admin");
// if (!isset($_SESSION['login'])) {
//     header("location:login.php");
//     exit();
// }
include_once("header.php");

?>
<div class="container-lg" id="main">
    <?php
    if (isset($_GET['booking_cancel'])) {
        echo '<h5 style="color:green;">Booking canceled successful.</h5>';
    }
    ?>
    <div style="border-radius: 10px;" id="show_movies">
        <?php
        include_once("show_movies.php");
        ?>
    </div>
    <?php
    if (isset($_GET['profile']) && $_GET['profile'] == 'update') {
    ?>
        <script>
            $(document).ready(function() {
                $('#show_movies').hide();
                $('#my_profile').show();
                // console.log('okay');
            });
        </script>
    <?php
    }
    ?>
    <div class="overflow-auto" id="my_profile">
        <?php
        if (isset($_SESSION["login"])) {
            include_once("my_profile.php");
        }
        ?>
    </div>
</div>

<?php include_once("footer.php") ?>