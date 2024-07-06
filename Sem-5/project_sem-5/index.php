<?php
require_once("connect.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");

?>
<div class="container-lg" id="main">
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
                console.log('okay');
            });
        </script>
    <?php
    }
    ?>
    <div class="overflow-auto" id="my_profile">
        <?php
        include_once("my_profile.php")
        ?>
    </div>
</div>

<?php include_once("footer.php") ?>