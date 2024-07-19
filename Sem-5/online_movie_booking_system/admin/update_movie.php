<?php
require_once("../connect.php");
extract($_POST);
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
// echo "<br>`";
$movie_genres = implode(", ", $movie_genres);
// echo "`<br>`";
$movie_languages = implode(", ", $movie_languages);
// echo "`<br>";
$formatted_date = date("j F Y", strtotime($movie_release_date));
echo $new_movie_query = "INSERT INTO `movies` (`title`, `genre`, `duration`, `rating`, `language`, `director`, `image_location`, `release_date`, `description`, `movie_price`) VALUES ('" . $movie_name . "', '" . $movie_genres . "', '" . $movie_duration . "', '" . $movie_rating . "', '" . $movie_languages . "', '" . $movie_director . "', 'images/" . $_FILES['movie_image']['name'] . "', '" . $formatted_date . "', '" . $movie_description . "', " . $movie_price . ");";

if (mysqli_query($conn, $new_movie_query)) {
    $query_success = true;
    // Move uploaded file to destination directory
    if (move_uploaded_file($_FILES['movie_image']['tmp_name'], '../images/' . $_FILES['movie_image']['name'])) {
        $upload_success = true;
        $_SESSION['message'] = "'" . $movie_name . "' Movie add successfully.";
    } else {
        $error_message = "Error: Failed to move uploaded file.";
    }
} else {
    $error_message = "Error: " . mysqli_error($conn);
}

if (!empty($error_message)) {
    $_SESSION['error'] = $error_message;
}

header("location:dashboard.php");
exit();
