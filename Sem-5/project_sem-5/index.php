<?php
require_once("connect.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");

?>

<div class="container-lg">
    <div style="border-radius: 10px;">
        <?php
        include_once("show_movies.php");
        ?>
    </div>
</div>

<?php include_once("footer.php") ?>