<?php
require_once("connect.php");
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");

$movies_records  = mysqli_query($conn, "SELECT * FROM movies");
?>
<style>
    .custom-checkbox .checkmark {
        position: absolute;
        top: 0px;
        height: 20px;
        width: 20px;
        border-radius: 5px;
    }
</style>
<div class="container border border-2 border-info rounded p-1">
    <div id="movie_info"></div>
    <?php
    if (isset($_GET['delete']) && $_GET['delete'] == 'yes') {
        echo "<h5 style='color: green;'>Movie Delete Successfully...</h5>";
    }
    if (isset($_GET['delete']) && $_GET['delete'] == 'no') {
        echo "<h5 style='color: red;display:inline;'>Movie Not Delete </h5><span>choose atleast one movie</span>";
    }
    ?>
    <form action="delete_movie.php" method="post">
        <div class="px-1 py-2" id="all_movies" style="display: flex;overflow-x: scroll;overflow-y: hidden;white-space: nowrap;-webkit-overflow-scrolling: touch;">
            <?php while ($movies_row = mysqli_fetch_assoc($movies_records)) {
                $id = $movies_row['id']; ?>
                <div class="card me-2" style="flex: 0 0 auto;max-width:200px;min-width:80px;">
                    <div class="movie_checkbox" style="position:absolute;">
                        <label class="custom-checkbox">
                            <input type="checkbox" class="checkmark" name="selected_movie[]" value="<?= $id ?>" size="50px">
                        </label>
                    </div>
                    <img id="this_movie" onclick="loadMovie('movie_info_form.php?id=<?= $id ?>')" class="card-img-top img-fluid" style="height: 250px;" src="<?= $movies_row['image_location'] ?>" alt="<?= $movies_row['title'] ?>">
                    <div class="p-1" style="white-space: normal;word-wrap: break-word;overflow-wrap: break-word;">
                        <p class="card-text"><?= $movies_row['title'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <input type="button" id="delete_btn" value="Delete Movies">
        <input type="submit" id="delete_sub" value="Delete">
        <span id="delete_text">Select movies that you want to delete</span>
    </form>
    <form action="update_movie.php" method="post" enctype="multipart/form-data">
        <input type="button" id="add_btn" value="Add New Movies">
        <div id="add_form">
            <label for="image">Select Movie Image:
                <input type="file" name="image" id="image">
            </label>
            <input type="text" name="title">
        </div>
    </form>

</div>
<script>
    $(document).ready(function() {
        $('.movie_checkbox').hide()
        $('#delete_sub').hide()
        $('#delete_text').hide()
        $('#delete_btn').click(function() {
            $('.movie_checkbox').show()
            $('#delete_sub').show()
            $('#delete_text').show()
            $('#delete_btn').hide()
        })
    })

    function loadMovie(page) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("movie_info").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", page);
        xhttp.send();
    }
</script>

<?php include_once("footer.php"); ?>