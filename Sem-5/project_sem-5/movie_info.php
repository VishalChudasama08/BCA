<?php
require_once("connect.php");
// if (!isset($_SESSION['login'])) {
//     header("location:login.php");
//     exit();
// }
include_once("header.php");
?>

<body style="background-color: #F7FFE5;">
    <?php
    // echo $_POST['movie_id'];
    // if (isset($_GET['id'])) {
    // $id = $_GET['id'];
    $id = $_POST['movie_id'];
    $query = "select * from movies where id=" . $id . "";
    $records  = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($records);
    // }
    ?>
    <div class="container border border-2 border-info rounded p-0" id="show_movies">
        <div class="card">
            <div class="row">
                <div class="col-4">
                    <img src="<?= $row['image_location'] ?>" class="img-fluid rounded-start" style="width: 25rem" alt="<?= $row['title'] ?> image">
                </div>
                <div class="col-8">
                    <div class="row">
                        <h4 class="card-title" style="height: 3rem; display: flex;align-items: center;"><strong><?= $row['title'] ?></strong></h4>
                        <div class="col-4">
                            <p class="card-text mb-1"><strong>Director: </strong>
                            <p class="card-text mb-1"><strong>Genres: </strong>
                            <p class="card-text mb-1"><strong>Language: </strong>
                            <p class="card-text mb-1"><strong>Duration: </strong>
                            <p class="card-text mb-1"><strong>Rating: </strong>
                            <p class="card-text mb-1"><strong>Release Date: </strong>
                        </div>
                        <div class="col-8">
                            <p class="card-text mb-1"><?= $row['director'] ?></p>
                            <p class="card-text mb-1"><?= $row['genre'] ?></p>
                            <p class="card-text mb-1"><?= $row['language'] ?></p>
                            <p class="card-text mb-1"><?= $row['duration'] ?></p>
                            <p class="card-text mb-1"><?= $row['rating'] ?></p>
                            <p class="card-text mb-1"><?= $row['release_date'] ?></p>
                        </div>
                        <p class="card-text mb-1"><strong>About the movie: </strong></p>
                        <p class="card-text mb-1"><?= $row['description'] ?></p>
                        <button class="btn btn-primary" onclick="request()" style="width: 95%;">Booking</button>
                    </div>
                </div>
            </div>
        </div>
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
        if (isset($_SESSION["login"])) {
            include_once("my_profile.php");
        }
        ?>
    </div>
</body>
<script>
    function request() {
        <?php
        if (!isset($_SESSION['login'])) {
            echo 'let res = confirm("Hey there, you need to be logged in to perform this action.");';
            echo "if (res) { postIds('date.php', ['movie_id:" . $row['id'] . "'], false); }";
        } else {
            echo "postIds('date.php', ['movie_id:" . $row['id'] . "'], false);";
        }
        ?>
    }
</script>
<?php
include_once("footer.php");
?>