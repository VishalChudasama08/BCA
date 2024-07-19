<?php
require_once("../connect.php");
$movie_info_records  = mysqli_query($conn, "SELECT * FROM movies WHERE id = " . $_GET['id'] . ";");
$info = mysqli_fetch_array($movie_info_records);
?>
<div class="card my-1 mx-1" id="show_movie_info">
    <div class="row">
        <div class="col-2">
            <img src="../<?= $info['image_location'] ?>" class="img-fluid rounded-start" style="width: 15rem" alt="<?= $info['title'] ?> image">
        </div>
        <div class="col-10">
            <div class="row">
                <h5 class="card-title" style="height: 3rem; display: flex;align-items: center;">Name: &nbsp;&nbsp;<strong><?= $info['title'] ?></strong></h5>
                <div class="col-2">
                    <p class="card-text mb-1"><strong>Director: </strong>
                    <p class="card-text mb-1"><strong>Genres: </strong>
                    <p class="card-text mb-1"><strong>Language: </strong>
                </div>
                <div class="col-4 border-end border-2 border-secondary">
                    <p class="card-text mb-1"><?= $info['director'] ?></p>
                    <p class="card-text mb-1"><?= $info['genre'] ?></p>
                    <p class="card-text mb-1"><?= $info['language'] ?></p>
                </div>
                <div class="col-2">
                    <p class="card-text mb-1"><strong>Duration: </strong>
                    <p class="card-text mb-1"><strong>Rating: </strong>
                    <p class="card-text mb-1"><strong>Release Date: </strong>
                </div>
                <div class="col-4">
                    <p class="card-text mb-1"><?= $info['duration'] ?></p>
                    <p class="card-text mb-1"><?= $info['rating'] ?></p>
                    <p class="card-text mb-1"><?= $info['release_date'] ?></p>
                </div>
                <p class="card-text mb-1"><strong>About the movie: </strong></p>
                <p class="card-text mb-1"><?= $info['description'] ?></p>
            </div>
        </div>
    </div>
</div>