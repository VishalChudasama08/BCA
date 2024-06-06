<?php
require_once("connect.php");
$number = $_GET['num'];
$query = "SELECT * FROM users WHERE mobile_number LIKE '%" . $number . "%';";
$record  = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($record);
if (isset($row)) {
    echo "Your User Name is " . $row['email'];
    echo "<br>Your User Password is " . $row['password'];
} else {
    echo "Not Found Your Any Records.";
}
?>
<form method="post" action="login.php" class="col-6 m-auto">
    <div class="row-3">
        <label for="email" class="form-label">Email (Username):</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="row-3">
        <label for="password" class="form-label">Create New Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="row-12 d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>