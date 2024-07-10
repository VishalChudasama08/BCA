<?php
require_once("connect.php");
if (!isset($_SESSION['admin'])) {
    header("location:dashboard.php");
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
<div class="container-fluid">
    <div class="row mx-5 p-1">
        <div class="col-2 border border-2 border-info rounded">
            <ul class="nav nav-pills flex-column mb-auto my-3">
                <li>
                    <button class="btn btn-outline-success w-100 mb-3" id="all_movie_btn">All Movies</button>
                </li>
                <li>
                    <button class="btn btn-outline-success w-100 mb-3" id="add_movie_btn">Add Movie</button>
                </li>
                <li>
                    <button class="btn btn-outline-success w-100 mb-3" id="delete_btn">Delete Movies</button>
                </li>
                <li>
                    <button class="btn btn-outline-success w-100 mb-3" id="user_btn">Show Users</button>
                </li>
                <li>
                    <button class="btn btn-outline-success w-100 mb-3" id="booking_history_btn">Booking History</button>
                </li>
            </ul>
        </div>
        <div class="col-10 border border-2 border-info rounded py-2">
            <div id="all_movies_and_info">
                <div id="movie_info"></div>
                <?php
                if (isset($_GET['delete']) && $_GET['delete'] == 'yes') {
                    echo "<h5 style='color: green;'>Movie Delete Successfully...</h5>";
                }
                if (isset($_GET['delete']) && $_GET['delete'] == 'no') {
                    echo "<script>
                    alert('Movie Not Delete. Choose atleast one movie for delete');
                </script>";
                }
                ?>
                <form action="delete_movie.php" method="post">
                    <p class="ms-2 my-0">Click on movie image to see it's all information</p>
                    <div class="px-1" id="all_movies" style="display: flex;overflow-x: scroll;overflow-y: hidden;white-space: nowrap;-webkit-overflow-scrolling: touch;">
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
                    <div id="delete_submit">
                        <input type="submit" value="Delete">
                        <span>Select movies that you want to delete</span>
                    </div>
                </form>
            </div>

            <div id="add_movie"><?php include_once("add_movie.php"); ?></div>

            <div id="show_users"><?php include_once("show_users.php"); ?></div>

            <div id="booking_history"><?php include_once("booking_history.php"); ?></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#add_movie').hide()

        $('#show_users').hide()

        $('#booking_history').hide()

        $('#delete_movie_alert').click()
        $('.movie_checkbox').hide()
        $('#delete_submit').hide()

        $('#all_movie_btn').click(function() {
            $('#add_movie').hide()
            $('#all_movies_and_info').show()
            $('#show_users').hide()
            $('#booking_history').hide()

            $('.movie_checkbox').hide()
            $('#delete_submit').hide()
        });

        $('#add_movie_btn').click(function() {
            $('#all_movies_and_info').hide()
            $('#add_movie').show()
            $('#show_users').hide()
            $('#booking_history').hide()

            $('.movie_checkbox').hide()
            $('#delete_submit').hide()
        });

        $('#delete_btn').click(function() {
            $('#all_movies_and_info').show()
            $('#add_movie').hide()
            $('#show_users').hide()
            $('#booking_history').hide()

            $('.movie_checkbox').show()
            $('#delete_submit').show()
        });

        $('#user_btn').click(function() {
            $('#all_movies_and_info').hide()
            $('#add_movie').hide()
            $('#show_users').show()
            $('#booking_history').hide()

            $('.movie_checkbox').show()
            $('#delete_submit').hide()
            $('#delete_text').hide()
        });

        $('#booking_history_btn').click(function() {
            $('#booking_history').show()
            $('#all_movies_and_info').hide()
            $('#add_movie').hide()
            $('#show_users').hide()
        })
    })

    function delete_alert() {
        alert('Movie Not Delete\nChoose atleast one movie');
    }

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