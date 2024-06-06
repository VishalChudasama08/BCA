<?php
$query = "SELECT * FROM movies";
$records  = mysqli_query($conn, $query);
?>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    while ($row = mysqli_fetch_assoc($records)) {
    ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?= $row['image_location'] ?>" class="card-img-top" style="height: 20rem; width:auto;" alt="<?= $row['title'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['duration'] ?>&nbsp; • &nbsp;<?= $row['genre'] ?>&nbsp; • &nbsp;<?= $row['rating'] ?>&nbsp; • &nbsp;<?= $row['language'] ?></p>
                </div>
                <a class="btn btn-primary" href="movie_info.php?id=<?= $row['id'] ?>&" role="button">Booking</a>
            </div>
        </div>
    <?php
    }
    ?>
</div>