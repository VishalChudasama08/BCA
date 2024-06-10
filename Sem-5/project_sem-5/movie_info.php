<?php
require_once("connect.php");
include_once("header.php");
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<body style="background-color: #F7FFE5;">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "select * from movies where id=" . $id . "";
        $records  = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($records);
    }
    ?>
    <div class="container">
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
                        <a class="btn btn-primary" href="date.php?id=<?= $row['id'] ?>" role="button" style="width: 95%;">Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include_once("footer.php");
?>