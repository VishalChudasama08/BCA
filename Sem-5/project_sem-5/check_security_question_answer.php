<?php
require_once("connect.php");
// print_r($_SESSION);
$user_id = $_SESSION['forgot_p_use'];
$answer = $_GET['answer'];

$query = "SELECT * FROM users WHERE id = " . $user_id . " AND answer = '" . $answer . "';";
$record  = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($record);
if (!isset($row)) {
    die("<h4 style='color: red;text-align:center;padding-top:10px;'>Not Found Your Any Records.</h4>");
}
?>
<form class="m-auto pt-3" action="update_password.php" method="post">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="username" class="col-form-label">Update New Email (username):</label>
        </div>
        <div class="col-auto">
            <input type="text" id="username" size="30" class="form-control" name="username" required>
        </div>
        <div class="col-auto">
            <label for="password" class="col-form-label">Create New Password:</label>
        </div>
        <div class="col-auto">
            <input type="password" id="password" size="30" class="form-control" name="password" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>