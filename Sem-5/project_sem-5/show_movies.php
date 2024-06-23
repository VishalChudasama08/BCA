<?php
$query = "SELECT * FROM movies";
$records  = mysqli_query($conn, $query);
?>
<div class="row">
    <?php
    while ($row = mysqli_fetch_assoc($records)) {
    ?>
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card mb-4" style="border: none;">
                <a href="movie_info.php?id=<?= $row['id'] ?>" onclick="login()">
                    <div class="ratio" style="--bs-aspect-ratio: calc(3 / 2 * 100%);">
                        <img src="<?= $row['image_location'] ?>" class="img-fluid rounded" alt="<?= $row['title'] ?>">
                    </div>
                </a>
                <div class="card-body m-0 px-0 py-2">
                    <h5 class="card-title m-0"><?= $row['title'] ?></h5>
                    <p class="card-text m-0">
                        <?php
                        $a = $row['genre'];
                        $languagesArray = preg_split('/,\s*/', $a);
                        if (count($languagesArray) <= 2) {
                            echo $a;
                        } else {
                            $b = implode(", ", array_slice($languagesArray, 0, 2));
                            echo $b . "...";
                        }
                        ?>
                    </p>
                    <p class="card-text m-0"><?= $row['rating']; ?></p>
                    <p class="card-text m-0">
                        <?php
                        $a = $row['language'];
                        $languagesArray = preg_split('/,\s*/', $a);
                        if (count($languagesArray) <= 2) {
                            echo $a;
                        } else {
                            $b = implode(", ", array_slice($languagesArray, 0, 2));
                            echo $b . "...";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<script>
    function login() {
        // window.location.href = "log-in.php";
        // if (!isset($_SESSION['login'])) {

        // <?php //header("location:login.php?text=yes"); 
            ?>
        // exit(); }
    }
</script>