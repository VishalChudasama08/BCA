<?php
require_once("connect.php");
include_once("header.php");

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<div class="container-lg">
    <div style="border-radius: 10px;">
        <?php
        include_once("show_movies.php");
        ?>
    </div>
</div>

<?php include_once("footer.php") ?>